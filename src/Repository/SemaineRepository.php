<?php


namespace App\Repository;


use App\Domain\MaquetteEnseignement;
use App\Entity\Semaine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
/**
 * @method Semaine|null find($id, $lockMode = null, $lockVersion = null)
 * @method Semaine|null findOneBy(array $criteria, array $orderBy = null)
 * @method Semaine[]    findAll()
 * @method Semaine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
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
            $query=$this->_em->createQuery('SELECT E.trigramme AS responsable, M.intitule as module, S.semaine as semaine, NULLIF(S.CM,0) as CM, NULLIF(S.TD,0) as TD, NULLIF(S.TP,0) as TP
                                        FROM App\Entity\Semaine S, App\Entity\Module M, App\Entity\Enseignant E
                                        WHERE S.module = M.id
                                            AND M.responsable = E.id
                                            AND M.PPN LIKE :UE
                                        ORDER BY M.intitule')
                ->setParameter("UE", $UE);
            $result = $query->getResult();
            $sem['UE'.$i]=$result;
        }
        return $sem;
    }
}