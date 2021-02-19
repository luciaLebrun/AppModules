<?php


namespace App\Repository;


use App\Entity\Module;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class ModuleRepository
 * @package App\Repository
 */
class ModuleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Module::class);
    }

    public function findEachModuleOfASemester($semester): iterable
    {
        $sem = array();
        for($i = 1; $i <= 2; $i++){
            $UE = "M".$semester.$i."%";
            $query=$this->createQueryBuilder('m')
                ->select('m.id as id')
                ->addselect('m.PPN as PPN')
                ->addSelect('m.intitule as intitule')
                ->addSelect('GROUP_CONCAT(e.trigramme SEPARATOR \' \') AS responsables')
                ->join('m.responsables', 'e')
                ->where('m.PPN LIKE :UE')
                ->groupBy('m.id')
                ->addGroupBy('m.PPN')
                ->addGroupBy('m.intitule')
                ->orderBy('m.PPN')
                ->setParameter('UE', $UE)
                ->getQuery();
            $result = $query->getResult();
            $sem['UE'.$i]=$result;
        }
        return $sem;
    }
}