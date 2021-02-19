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
     * @Route("/module/{ppn}", name="FicheModule", requirements={"ppn"="M.+"}))
     */
    public function FicheModule($ppn): Response
    {
        $moduleRepo = $this->getDoctrine()->getRepository(Module::class);
        $module = $moduleRepo->findOneBy(['PPN' => $ppn]);

        $enseignantRepo = $this->getDoctrine()->getRepository(Enseignant::class);
        $responsablesModule = $module->getResponsables();
        $responsables = [];
        $i = 0;
        foreach ($responsablesModule as $responsableModule)
        {
            $responsables[$i] = $enseignantRepo->find($responsableModule);
            $i++;
        }

        $weekRepo=$this->getDoctrine()->getRepository(Semaine::class);
        $moduleWeeks=$weekRepo->findEachWeekOfAModule($ppn);

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
            'responsables'=>$responsables,
            'moduleWeeks'=>$moduleWeeks,
            'semesterFirstWeek'=>$semesterFirstWeek,
            'semesterLastWeek'=>$semesterLastWeek,
        ]);
    }
}
