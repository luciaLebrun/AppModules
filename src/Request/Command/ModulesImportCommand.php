<?php


namespace App\Request\Command;


use App\Entity\Module;
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

        $io = new SymfonyStyle($input, $output);

        $io->title("En attente de l'importation des csv..");

        $reader = Reader::createFromPath('../Request/CSV/modules.csv', "r");
        $reader->setDelimiter(';');

        $results = $reader->fetchAssoc();

        foreach($results as $row)
        {
            if(substr($row['module(PPN) '], 0,1) != '#') // Exclusion des commentaires éventuels
            {

                $module = $this->entityManager->getRepository(Module::class)->findOneBy(array('module(PPN) ' => str_replace(' ', '', $row['module(PPN) ']))); // suppression des espaces inutiles

                if($module == null)
                {
                    $module = new Module();
                }

                $module->setPPN(str_replace(' ', '', $row['module(PPN) ']));
                $module->setIntitule(str_replace(' ', '', $row[' module(GPU) intitulé '])[1]);

                $this->entityManager->persist($module);
            }
        }

        $this->entityManager->flush();

        unlink('../Request/CSV/modules.csv');

        $io->success("L'importation est finie !");
        return Command::SUCCESS;
    }
}