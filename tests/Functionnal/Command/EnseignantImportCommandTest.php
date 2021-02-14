<?php


namespace App\Tests\Functionnal\Command;


use App\Repository\EnseignantRepository;
use App\Request\Command\EnseignantImportCommand;
use Doctrine\ORM\EntityManager;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * Class EnseignantImportCommandTest
 * @package App\Tests\Command
 */
class EnseignantImportCommandTest
{
    /** @var EnseignantRepository*/
    private $customerEntityManagerMock;
    /** @var CommandTester */
    private $commandTester;

    protected function setUp() : void
    {
        $this->customerEntityManagerMock = $this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $application = new Application();
        $application->add(new EnseignantImportCommand($this->customerEntityManagerMock));
        $command = $application->find('csv:import:enseignants');
        $this->commandTester = new CommandTester($command);
    }

    protected function tearDown() : void
    {
        $this->customerEntityManagerMock = null;
        $this->commandTester = null;
    }

    public function testExecute()
    {
        // TODO Modif le chemin d'accès par rapport au test
        $myfile = fopen('%kernel.project_dir%/../src/Request/CSV/enseignants.csv',"w");
        fwrite($myfile, "trigramme ; Prénom Nom ; service dû ; statut ; contact");
        fclose($myfile);
        $this->commandTester->execute([]);
        $this->assertEquals(Command::SUCCESS, $this->commandTester->getStatusCode());
    }

}