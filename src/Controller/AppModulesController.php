<?php

namespace App\Controller;

use App\Entity\Semaine;
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
}
