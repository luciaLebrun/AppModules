<?php


namespace App\Repository;

use App\Domain\MaquetteEnseignement;
use App\Entity\Semaine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class SemaineRepository
 * @package App\Repository
 */
class SemaineRepository extends ServiceEntityRepository implements MaquetteEnseignement
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Semaine::class);
    }

    public function findEachWeekOfASemester($semester): iterable
    {
        $sem = array();
        for($i = 1; $i <= 2; $i++){
            $UE = "M".$semester.$i."%";
            $query=$this->createQueryBuilder('s')
                ->select('m.intitule as module')
                ->addSelect('s.semaine as semaine')
                ->addSelect('NULLIF(s.CM,0) as CM')
                ->addSelect('NULLIF(s.TD,0) as TD')
                ->addSelect('NULLIF(s.TP,0) as TP')
                ->addSelect('GROUP_CONCAT(e.trigramme SEPARATOR \' \') AS responsables')
                ->join('s.module', 'm')
                ->join('m.responsables','e')
                ->where('m.PPN LIKE :UE')
                ->groupBy('m.intitule')
                ->addGroupBy('s.semaine')
                ->addGroupBy('s.CM')
                ->addGroupBy('s.TD')
                ->addGroupBy('s.TP')
                ->orderBy('m.intitule')
                ->setParameter('UE', $UE)
                ->getQuery();
            $result = $query->getResult();
            $sem['UE'.$i]=$result;
        }
        return $sem;
    }
}