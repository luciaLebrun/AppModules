<?php


namespace App\Tests\Functionnal\Command;

use App\Repository\ModuleRepository;
use App\Request\Command\ModulesImportCommand;
use Doctrine\ORM\EntityManager;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * Class ModulesImportCommandTest
 * @package App\Tests\Command
 */
class ModulesImportCommandTest
{

    /** @var ModuleRepository*/
    private $customerEntityManagerMock;
    /** @var CommandTester */
    private $commandTester;

    protected function setUp() : void
    {
        $this->customerEntityManagerMock = $this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $application = new Application();
        $application->add(new ModulesImportCommand($this->customerEntityManagerMock));
        $command = $application->find('csv:import:modules');
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
        $myfile = fopen('%kernel.project_dir%/../src/Request/CSV/modules.csv',"w");
        fwrite($myfile, "module(PPN) ; module(GPU) intitulé");
        fclose($myfile);
        $this->commandTester->execute([]);
        $this->assertEquals(Command::SUCCESS, $this->commandTester->getStatusCode());
    }

}