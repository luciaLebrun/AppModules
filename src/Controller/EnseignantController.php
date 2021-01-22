<?php


namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;
/**
 * Class EnseignantController
 * @package App\Controller
 */
class EnseignantController extends AbstractController
{
    /**
     * @Route("/import_enseignants", name="import_enseignants")
     * @param KernelInterface $kernel
     * @return Response
     * @throws Exception
     */
    public function import(KernelInterface $kernel): Response
    {
        $application = new Application($kernel);
        $application->setAutoExit(false);

        $input = new ArrayInput(array('command' => 'csv:import'));
        $output = new BufferedOutput();
        $application->run($input, $output);


        var_dump($output->fetch());

        return $this->redirectToRoute('index');
    }

}