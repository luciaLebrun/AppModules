<?php

namespace App\Controller;

use App\Entity\Enseignant;
use App\Entity\Module;
use App\Entity\ModuleDetails;
use App\Entity\Semaine;
use App\Repository\ModuleDetailsRepository;
use App\Repository\ModuleRepository;
use App\Repository\SemaineRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppModulesController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): RedirectResponse
    {
        return $this->redirectToRoute('semestre',['semester'=>1],301);
    }

    /**
     * @param int $semester
     * @return Response
     * @Route("/semestre/{semester<[1-5]>}", name="semestre")
     */
    public function MaquetteEnseignement(int $semester): Response
    {
        $moduleRepo=$this->getDoctrine()->getRepository(Module::class);
        $semesterModules=$moduleRepo->findEachModuleOfASemester($semester);

        $semesterWeeks=[];
        for($i=1; $i<=2; $i++)
        {
            $UE = "UE".$i;
            foreach ($semesterModules[$UE] as $module)
            {
                $semaineRepo=$this->getDoctrine()->getRepository(Semaine::class);
                $semesterWeeks[$UE][$module['PPN']]=$semaineRepo->findBy(['module' => $module]);
            }
        }

        // TODO: Get the school calendar instead of the switch
        $semesterFirstDay = ""; $semesterLastDay = "";
        switch ($semester){
            case 1 :
            case 3 :
                $semesterFirstDay = new DateTime("2019-09-02");
                $semesterLastDay = new DateTime("2020-01-26");
                break;
            case 2 :
            case 4 :
                $semesterFirstDay = new DateTime("2020-01-27");
                $semesterLastDay = new DateTime("2020-06-22");
                break;
            case 5 :
                $semesterFirstDay = new DateTime("2019-09-02");
                $semesterLastDay = new DateTime("2020-06-22");
                break;
        }
        $semesterFirstWeek = $semesterFirstDay->format("W");
        $semesterLastWeek = $semesterLastDay->format("W");

        return $this->render('AppModules/MaquetteEnseignement.html.twig', [
            'semesterNumber'=>$semester,
            'semesterModules'=>$semesterModules,
            'semesterWeeks'=>$semesterWeeks,
            'semesterFirstWeek'=>$semesterFirstWeek,
            'semesterLastWeek'=>$semesterLastWeek,
        ]);
    }

    /**
     * @param $ppn
     * @param $semaine
     * @return Response
     * @Route("/module/{ppn}", name="module", requirements={"ppn"="M([1-2]{2}[0-9]{2})|([3-4][1-3][0-9]{2}(PEC|PEL)*)|(50[0-9]{2}(DMO|DFS)*)"})
     */
    public function FicheModule(string $ppn): Response
    {
        $moduleRepo = $this->getDoctrine()->getRepository(Module::class);
        $module = $moduleRepo->findOneBy(['PPN' => $ppn]);

        $weekRepo=$this->getDoctrine()->getRepository(Semaine::class);
        $moduleWeeks=$weekRepo->findBy(['module' => $module]);

        $enseignantRepo = $this->getDoctrine()->getRepository(Enseignant::class);

        $responsables = $module->getResponsables();
        $moduleResponsables = [];
        $i = 0;
        foreach ($responsables as $responsable)
        {
            $moduleResponsables[$i] = $enseignantRepo->find($responsable);
            $i++;
        }

        $moduleTeachers = $enseignantRepo->findTeachersOfAModule($module);

        $detailsRepo=$this->getDoctrine()->getRepository(ModuleDetails::class);
        $moduleDetails=[];
        foreach ($moduleTeachers['CM'] as $teacher)
        {
            $moduleDetails['CM'][$teacher['trigramme']]=$detailsRepo->findBy(['module'=>$module, 'enseignant'=>$teacher, 'typeCours'=>'CM']);
        }
        foreach ($moduleTeachers['TD'] as $teacher)
        {
            $moduleDetails['TD'][$teacher['trigramme']]=$detailsRepo->findBy(['module'=>$module, 'enseignant'=>$teacher, 'typeCours'=>'TD']);
        }
        foreach ($moduleTeachers['TP'] as $teacher)
        {
            $moduleDetails['TP'][$teacher['trigramme']]=$detailsRepo->findBy(['module'=>$module, 'enseignant'=>$teacher, 'typeCours'=>'TP']);
        }
        //dd($moduleDetails);

        // TODO: Get the school calendar instead of the switch
        $semesterFirstDay = ""; $semesterLastDay = "";
        switch ($ppn[1]){
            case 1 :
            case 3 :
                $semesterFirstDay = new DateTime("2019-09-02");
                $semesterLastDay = new DateTime("2020-01-26");
                break;
            case 2 :
            case 4 :
                $semesterFirstDay = new DateTime("2020-01-27");
                $semesterLastDay = new DateTime("2020-06-22");
                break;
            case 5 :
                $semesterFirstDay = new DateTime("2019-09-02");
                $semesterLastDay = new DateTime("2020-06-22");
                break;
        }
        $semesterFirstWeek = $semesterFirstDay->format("W");
        $semesterLastWeek = $semesterLastDay->format("W");

        return $this->render('AppModules/FicheModule.html.twig', [
            'module'=> $module,
            'moduleResponsables'=>$moduleResponsables,
            'moduleTeachers'=>$moduleTeachers,
            'moduleWeeks'=>$moduleWeeks,
            'moduleDetails'=>$moduleDetails,
            'semesterFirstWeek'=>$semesterFirstWeek,
            'semesterLastWeek'=>$semesterLastWeek,
        ]);
    }
}
