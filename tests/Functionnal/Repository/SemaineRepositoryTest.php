<?php

namespace App\Tests\Repository;

use App\Entity\Semaine;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Class SemaineRepositoryTest
 * @package App\Tests\Repository
 */
class SemaineRepositoryTest extends KernelTestCase
{
    /**
     * @var EntityManager
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

        // Test 1 : the right number of elements are returned
        $this->assertCount(2, $semester);
        $this->assertCount(58, $semester['UE1']);
        $this->assertCount(6, $semester['UE1'][1]);

        // Test 2 : that it returns the correct form of object
        $this->assertIsIterable($semester);
        $this->assertIsIterable($semester['UE1']);
        $this->assertIsIterable($semester['UE2'][1]);
        $this->assertIsFloat($semester['UE2'][1]['semaine']);
        $this->assertIsString($semester['UE2'][1]['responsables']);

        // Test 3 : that they’re in the right order
        $this->assertStringContainsString('BCOO2',$semester['UE1'][0]['module']);
        $this->assertStringContainsString('RES2',$semester['UE1'][40]['module']);
        $this->assertStringContainsString('SI2',$semester['UE1'][57]['module']);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // doing this is recommended to avoid memory leaks
        $this->entityManager->close();
        $this->entityManager = null;
    }
}
