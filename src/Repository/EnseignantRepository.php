<?php

namespace App\Repository;

use App\Domain\FicheModule;
use App\Entity\Enseignant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class EnseignantRepository
 * @package App\Repository
 */
class EnseignantRepository extends ServiceEntityRepository implements FicheModule
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enseignant::class);
    }

    public function findTeachersOfAModule($module): iterable
    {
        $teachers = [];
        $query=$this->createQueryBuilder('e')
            ->select('e.id as id')
            ->addselect('e.trigramme as trigramme')
            ->addSelect('e.nom as nom')
            ->addSelect('e.prenom as prenom')
            ->join('e.interventions', 'md')
            ->join('md.module', 'm')
            ->where('m.id = :module')
            ->andWhere('md.typeCours LIKE \'CM\'')
            ->groupBy('e.id')
            ->addGroupBy('e.trigramme')
            ->addGroupBy('e.nom')
            ->addGroupBy('e.prenom')
            ->orderBy('e.id')
            ->setParameter('module', $module)
            ->getQuery();
        $teachers['CM'] = $query->getResult();

        $query=$this->createQueryBuilder('e')
            ->select('e.id as id')
            ->addselect('e.trigramme as trigramme')
            ->addSelect('e.nom as nom')
            ->addSelect('e.prenom as prenom')
            ->join('e.interventions', 'md')
            ->join('md.module', 'm')
            ->where('m.id = :module')
            ->andWhere('md.typeCours LIKE \'TD\'')
            ->groupBy('e.id')
            ->addGroupBy('e.trigramme')
            ->addGroupBy('e.nom')
            ->addGroupBy('e.prenom')
            ->orderBy('e.id')
            ->setParameter('module', $module)
            ->getQuery();
        $teachers['TD'] = $query->getResult();

        $query=$this->createQueryBuilder('e')
            ->select('e.id as id')
            ->addselect('e.trigramme as trigramme')
            ->addSelect('e.nom as nom')
            ->addSelect('e.prenom as prenom')
            ->join('e.interventions', 'md')
            ->join('md.module', 'm')
            ->where('m.id = :module')
            ->andWhere('md.typeCours LIKE \'TP\'')
            ->groupBy('e.id')
            ->addGroupBy('e.trigramme')
            ->addGroupBy('e.nom')
            ->addGroupBy('e.prenom')
            ->orderBy('e.trigramme')
            ->setParameter('module', $module)
            ->getQuery();
        $teachers['TP'] = $query->getResult();

        return $teachers;
    }
}
