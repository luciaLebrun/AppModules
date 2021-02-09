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
     * @Route("/semestre/{semester<\d+>}", name="semestre")
     */
    public function MaquetteEnseignement(int $semester): Response
    {
        $weekRepo=$this->getDoctrine()->getRepository(Semaine::class);

        $semesterWeeks=$weekRepo->findEachWeekOfASemester($semester);

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
        $moduledetailsrepo = $this->getDoctrine()->getRepository(ModuleDetails::class);
        $moduledetails = $moduledetailsrepo->findAll();

        return $this->render('AppModules/FicheModule.html.twig', [

            'module'=> $module,
            'responsables'=>$responsables,
            'detailsmodule'=>$moduledetails,
        ]);
    }
}
