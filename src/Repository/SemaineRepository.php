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

    public function toutesLesSemaines(): iterable
    {
        // TODO: Implement toutesLesSemaines() method.
    }

    public function toutesLesSemainesDeLUE11(): iterable
    {
        //création de query avec DQL
        $query=$this->_em->createQuery('SELECT E.trigramme AS responsable, M.intitule as module, S.semaine as semaine, S.CM as CM, S.TD as TD, S.TP as TP
                                        FROM App\Entity\Semaine S, App\Entity\Module M, App\Entity\Enseignant E
                                        WHERE S.module = M.id
                                            AND M.responsable = E.id
                                            AND M.PPN LIKE \'M11%\'
                                        ORDER BY M.intitule');
        //récupération du résultat à partir de la query
        $result = $query->getResult();
        //on retourne le résultat
        return $result;
    }

    public function toutesLesSemainesDeLUE12(): iterable
    {
        // TODO: Implement toutesLesSemainesDeLUE12() method.
    }

    public function toutesLesSemainesDeLUE21(): iterable
    {
        //création de query avec DQL
        $query=$this->_em->createQuery('SELECT E.trigramme, M.intitule, S.semaine, S.CM, S.TD, S.TP
                                        FROM App\Entity\Semaine S, App\Entity\Module M, App\Entity\Enseignant E
                                        WHERE S.module = M.id
                                            AND M.responsable = E.id
                                            AND M.PPN LIKE \'M21%\'
                                        ORDER BY M.intitule');
        //récupération du résultat à partir de la query
        $result = $query->getResult();
        //on retourne le résultat
        return $result;
    }

    public function toutesLesSemainesDeLUE22(): iterable
    {
        // TODO: Implement toutesLesSemainesDeLUE22() method.
    }

    public function toutesLesSemainesDeLUE31(): iterable
    {
        // TODO: Implement toutesLesSemainesDeLUE31() method.
    }

    public function toutesLesSemainesDeLUE32(): iterable
    {
        // TODO: Implement toutesLesSemainesDeLUE32() method.
    }

    public function toutesLesSemainesDeLUE41(): iterable
    {
        // TODO: Implement toutesLesSemainesDeLUE41() method.
    }

    public function toutesLesSemainesDeLUE42(): iterable
    {
        // TODO: Implement toutesLesSemainesDeLUE42() method.
    }

    public function toutesLesSemainesDeLP(): iterable
    {
        // TODO: Implement toutesLesSemainesDeLP() method.
    }
}