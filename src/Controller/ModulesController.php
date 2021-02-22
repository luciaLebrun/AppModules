<?php

namespace App\Controller;

use App\Entity\CSVFile;
use App\Form\CSVFileType;
use App\Service\FileUploader;
use Exception;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ModulesController
 * @package App\Controller
 */
class ModulesController extends AbstractController
{
    /**
     * @Route("/import_modules", name="import_modules")
     * @param Request $request
     * @param FileUploader $fileUploader
     * @param KernelInterface $kernel
     * @return Response
     * @throws Exception
     */
    public function import(Request $request, FileUploader $fileUploader, KernelInterface $kernel): Response
    {
        $file = new CSVFile();
        $name = "modules";
        $form = $this->createForm(CSVFileType::class, [$file,$name]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $brochureFile */
            $fileCSV = $form->get('csvFile')->getData();

            if ($fileCSV) {
                $fileUploader->upload($fileCSV);
            }
            $application = new Application($kernel);
            $application->setAutoExit(false);

            $input = new ArrayInput(array('command' => 'csv:import:modules'));
            $output = new BufferedOutput();
            $application->run($input, $output);

            var_dump($output->fetch());

            return $this->redirectToRoute('semestre', ['semester' => 1], 301);
        }

        return $this->render('Request/UploadModule.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
