<?php


namespace App\Request\Command;


use App\Entity\Enseignant;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Reader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class EnseignantImportCommand extends Command
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
            ->setName("csv:import:enseignants")
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

        $reader = Reader::createFromPath('%kernel.project_dir%/../src/Request/CSV/enseignants.csv', "r");
        $reader->setDelimiter(';');

        $results = $reader->fetchAssoc();

        foreach($results as $row)
        {
            if(!($this->entityManager->getRepository(Enseignant::class)->findOneBy(array('trigramme' => str_replace(' ', '', $row['trigramme '])))))
            {
                if(substr($row['trigramme '], 0,1) != '#') // On exclut les commentaires
                {
                    $enseignant = new Enseignant();

                    $enseignant->setTrigramme(str_replace(' ', '', $row['trigramme ']));
                    $enseignant->setPrenom(explode(' ', $row[' Prénom Nom '])[1]);
                    $enseignant->setNom(explode(' ', $row[' Prénom Nom '])[2]);
                    $enseignant->setServiceDu(str_replace(' ', '', $row[' service dû ']));
                    $enseignant->setStatut(str_replace(' ', '', $row[' statut ']));

                    if(str_replace(' ', '', $row[' contact']) != NULL)
                    {
                        $enseignant->setContact(str_replace(' ', '', $row[' contact']));
                    }
                    $this->entityManager->persist($enseignant);
                }
            }
        }

        $this->entityManager->flush();

        unlink('%kernel.project_dir%/../src/Request/CSV/enseignants.csv');

        $io->success("L'importation est finie !");
        return Command::SUCCESS;
    }

}