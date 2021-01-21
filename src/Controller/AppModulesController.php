<?php

namespace App\Controller;

use App\Entity\Semaine;
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
        return $this->redirectToRoute('semestre',['page'=>1],301);
    }

    /**
     * @Route("/semestre/{page<\d+>}", name="semestre")
     */
    public function MaquetteEnseignement(int $page): Response
    {
        $semainerepo=$this->getDoctrine()->getRepository(Semaine::class);

        $semainesUE1=""; $semainesUE2="";

        switch ($page){
            case 1 :
                $semainesUE1=$semainerepo->toutesLesSemainesDeLUE11();
                $semainesUE2=$semainerepo->toutesLesSemainesDeLUE12();
                break;
            case 2 :
                $semainesUE1=$semainerepo->toutesLesSemainesDeLUE21();
                $semainesUE2=$semainerepo->toutesLesSemainesDeLUE22();
                break;
            case 3 :
                $semainesUE1=$semainerepo->toutesLesSemainesDeLUE31();
                $semainesUE2=$semainerepo->toutesLesSemainesDeLUE32();
                break;
            case 4 :
                $semainesUE1=$semainerepo->toutesLesSemainesDeLUE41();
                $semainesUE2=$semainerepo->toutesLesSemainesDeLUE42();
                break;
            case 5 :
                $semainesUE1=$semainerepo->toutesLesSemainesDeLUE41();
                $semainesUE2=$semainerepo->toutesLesSemainesDeLUE42();
                break;
        }

        $ddatedebs1 = "2019-09-02";
        $datedebs1 = new \DateTime($ddatedebs1);
        $semainedebs1 = $datedebs1->format("W");

        $ddatefins1 = "2020-01-26";
        $datefins1 = new \DateTime($ddatefins1);
        $semainefins1 = $datefins1->format("W");

        return $this->render('AppModules/MaquetteEnseignement.html.twig', [
            'numSemestre'=>$page,
            'semainesUE1'=>$semainesUE1,
            'semainesUE2'=>$semainesUE2,
            'semainedebs1'=>$semainedebs1,
            'semainefins1'=>$semainefins1,
        ]);
    }
}
