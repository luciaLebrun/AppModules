<?php

namespace App\Controller;

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

        return $this->render('AppModules/MaquetteEnseignement.html.twig', [
            'controller_name' => 'AppModulesController',
        ]);
    }
}
