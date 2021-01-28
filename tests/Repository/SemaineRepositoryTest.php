<?php

namespace App\Tests\Repository;

use App\Entity\Semaine;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class SemaineRepositoryTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testFindEachWeekOfASemester(){
        $semester = $this->entityManager->getRepository(Semaine::class)->findEachWeekOfASemester(2);

        $this->assertCount(2, $semester);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // doing this is recommended to avoid memory leaks
        $this->entityManager->close();
        $this->entityManager = null;
    }
}
