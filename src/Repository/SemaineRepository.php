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
        $query=$this->_em->createQuery('SELECT E.trigramme AS responsable, M.intitule as module, S.semaine as semaine, NULLIF(S.CM,0) as CM, NULLIF(S.TD,0) as TD, NULLIF(S.TP,0) as TP
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
        //création de query avec DQL
        $query=$this->_em->createQuery('SELECT E.trigramme AS responsable, M.intitule as module, S.semaine as semaine, NULLIF(S.CM,0) as CM, NULLIF(S.TD,0) as TD, NULLIF(S.TP,0) as TP
                                        FROM App\Entity\Semaine S, App\Entity\Module M, App\Entity\Enseignant E
                                        WHERE S.module = M.id
                                            AND M.responsable = E.id
                                            AND M.PPN LIKE \'M12%\'
                                        ORDER BY M.intitule');
        //récupération du résultat à partir de la query
        $result = $query->getResult();
        //on retourne le résultat
        return $result;
    }

    public function toutesLesSemainesDeLUE21(): iterable
    {
        //création de query avec DQL
        $query=$this->_em->createQuery('SELECT E.trigramme AS responsable, M.intitule as module, S.semaine as semaine, NULLIF(S.CM,0) as CM, NULLIF(S.TD,0) as TD, NULLIF(S.TP,0) as TP
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
        //création de query avec DQL
        $query=$this->_em->createQuery('SELECT E.trigramme AS responsable, M.intitule as module, S.semaine as semaine, NULLIF(S.CM,0) as CM, NULLIF(S.TD,0) as TD, NULLIF(S.TP,0) as TP
                                        FROM App\Entity\Semaine S, App\Entity\Module M, App\Entity\Enseignant E
                                        WHERE S.module = M.id
                                            AND M.responsable = E.id
                                            AND M.PPN LIKE \'M22%\'
                                        ORDER BY M.intitule');
        //récupération du résultat à partir de la query
        $result = $query->getResult();
        //on retourne le résultat
        return $result;
    }

    public function toutesLesSemainesDeLUE31(): iterable
    {
        //création de query avec DQL
        $query=$this->_em->createQuery('SELECT E.trigramme AS responsable, M.intitule as module, S.semaine as semaine, NULLIF(S.CM,0) as CM, NULLIF(S.TD,0) as TD, NULLIF(S.TP,0) as TP
                                        FROM App\Entity\Semaine S, App\Entity\Module M, App\Entity\Enseignant E
                                        WHERE S.module = M.id
                                            AND M.responsable = E.id
                                            AND M.PPN LIKE \'M31%\'
                                        ORDER BY M.intitule');
        //récupération du résultat à partir de la query
        $result = $query->getResult();
        //on retourne le résultat
        return $result;
    }

    public function toutesLesSemainesDeLUE32(): iterable
    {
        //création de query avec DQL
        $query=$this->_em->createQuery('SELECT E.trigramme AS responsable, M.intitule as module, S.semaine as semaine, NULLIF(S.CM,0) as CM, NULLIF(S.TD,0) as TD, NULLIF(S.TP,0) as TP
                                        FROM App\Entity\Semaine S, App\Entity\Module M, App\Entity\Enseignant E
                                        WHERE S.module = M.id
                                            AND M.responsable = E.id
                                            AND M.PPN LIKE \'M32%\'
                                        ORDER BY M.intitule');
        //récupération du résultat à partir de la query
        $result = $query->getResult();
        //on retourne le résultat
        return $result;
    }

    public function toutesLesSemainesDeLUE41(): iterable
    {
        //création de query avec DQL
        $query=$this->_em->createQuery('SELECT E.trigramme AS responsable, M.intitule as module, S.semaine as semaine, NULLIF(S.CM,0) as CM, NULLIF(S.TD,0) as TD, NULLIF(S.TP,0) as TP
                                        FROM App\Entity\Semaine S, App\Entity\Module M, App\Entity\Enseignant E
                                        WHERE S.module = M.id
                                            AND M.responsable = E.id
                                            AND M.PPN LIKE \'M41%\'
                                        ORDER BY M.intitule');
        //récupération du résultat à partir de la query
        $result = $query->getResult();
        //on retourne le résultat
        return $result;
    }

    public function toutesLesSemainesDeLUE42(): iterable
    {
        //création de query avec DQL
        $query=$this->_em->createQuery('SELECT E.trigramme AS responsable, M.intitule as module, S.semaine as semaine, NULLIF(S.CM,0) as CM, NULLIF(S.TD,0) as TD, NULLIF(S.TP,0) as TP
                                        FROM App\Entity\Semaine S, App\Entity\Module M, App\Entity\Enseignant E
                                        WHERE S.module = M.id
                                            AND M.responsable = E.id
                                            AND M.PPN LIKE \'M42%\'
                                        ORDER BY M.intitule');
        //récupération du résultat à partir de la query
        $result = $query->getResult();
        //on retourne le résultat
        return $result;
    }

    public function toutesLesSemainesDeLP(): iterable
    {
        //création de query avec DQL
        $query=$this->_em->createQuery('SELECT E.trigramme AS responsable, M.intitule as module, S.semaine as semaine, NULLIF(S.CM,0) as CM, NULLIF(S.TD,0) as TD, NULLIF(S.TP,0) as TP
                                        FROM App\Entity\Semaine S, App\Entity\Module M, App\Entity\Enseignant E
                                        WHERE S.module = M.id
                                            AND M.responsable = E.id
                                            AND M.PPN LIKE \'M5%\'
                                        ORDER BY M.intitule');
        //récupération du résultat à partir de la query
        $result = $query->getResult();
        //on retourne le résultat
        return $result;
    }
}