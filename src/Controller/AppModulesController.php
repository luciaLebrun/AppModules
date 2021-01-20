<?php

namespace App\Controller;

use App\Entity\Semaine;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppModulesController extends AbstractController
{
    /**
     * @Route("/", name="maquette")
     */
    public function index(): Response
    {
        $semainerepo=$this->getDoctrine()->getRepository(Semaine::class);

        $semainesUE11=$semainerepo->toutesLesSemainesDeLUE11();
        $semainesUE21=$semainerepo->toutesLesSemainesDeLUE21();

        $ddatedebscol = "2019-09-02";
        $datedebscol = new \DateTime($ddatedebscol);
        $semainedebscol = $datedebscol->format("W");

        $ddatefinscol = "2020-01-26";
        $datefinscol = new \DateTime($ddatefinscol);
        $semainefinscol = $datefinscol->format("W");

        return $this->render('AppModules/MaquetteEnseignement.html.twig', [
            'semainesUE11'=>$semainesUE11,
            'semainedebscol'=>$semainedebscol,
            'semainefinscol'=>$semainefinscol,
        ]);
    }
}
