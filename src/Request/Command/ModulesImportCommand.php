<?php


namespace App\Request\Command;


use App\Entity\Module;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Reader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\HttpFoundation\Response;

class ModulesImportCommand extends Command
{
    /** @var EntityManagerInterface  */
    private EntityManagerInterface $entityManager;

    /**
     * CSVImportCommand constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }


    protected function configure()
    {
        $this
            ->setName("csv:import:modules")
            ->setDescription("Imports a mock CSV file");

    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->resetDatabase($this->entityManager);

        $io = new SymfonyStyle($input, $output);

        $io->title("En attente de l'importation des csv..");

        $reader = Reader::createFromPath("..\src\Request\CSV\\modules.csv", "r");
        $reader->setDelimiter(';');

        $results = $reader->fetchAssoc();

        $modules = $this->entityManager->getRepository("App:Module")->findAll();

        foreach($results as $row)
        {
            if(!(in_array(str_replace(' ', '', $row['module(PPN) ']), $modules))) // suppression des espaces inutiles
            {
                if(substr($row['module(PPN) '], 0,1) != '#') // Exclusion des commentaires éventuels
                {
                    $module = new Module();

                    $module->setPPN(str_replace(' ', '', $row['module(PPN) ']));
                    $module->setIntitule(str_replace(' ', '', $row[' module(GPU) intitulé '])[1]);

                    $this->entityManager->persist($module);
                }
            }

        }

        $this->entityManager->flush();

        unlink("..\src\Request\CSV\\modules.csv");

        $io->success("L'importation est finie !");
        return Command::SUCCESS;
    }

    /**
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function resetDatabase(EntityManagerInterface $em): Response
    {
        $query = $em->createQuery(
            'DELETE FROM App\Entity\Module'
        )->execute();

        return new Response('', Response::HTTP_OK);
    }
}