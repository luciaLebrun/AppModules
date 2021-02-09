<?php

namespace App\Repository;

use App\Entity\ModuleDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ModuleDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModuleDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModuleDetails[]    findAll()
 * @method ModuleDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModuleDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModuleDetails::class);
    }
    public function ModuleDetailsSemaines()
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
        "SELECT DISTINCT md.semaine as Semaine
        FROM App\Entity\ModuleDetails md, App\Entity\Semaine s
        WHERE md.semaine = s.id");
        return $query->getResult();
    }
    public function ModuleDetailsCM()
    {
        ("SELECT DISTINCT md.semaine as Semaine, md.trigramme_id as Trigramme, md.type_cour TypeCour, md.nb_groupe as NbGroupe, md.ppn_id as PPN
        FROM module_details md, enseignant e, semaine s
        WHERE md.semaine = s.id
        AND md.trigramme_id = e.id
        AND md.type_cour = 'CM'");
    }
    public function ModuleDetailsTD()
    {
        ("SELECT DISTINCT md.semaine as Semaine, md.trigramme_id as Trigramme, md.type_cour TypeCour, md.nb_groupe as NbGroupe, md.ppn_id as PPN
        FROM module_details md, enseignant e, semaine s
        WHERE md.semaine = s.id
        AND md.trigramme_id = e.id
        AND md.type_cour = 'TD'");
    }
    public function ModuleDetailsTP()
    {
        ("SELECT DISTINCT md.semaine as Semaine, md.trigramme_id as Trigramme, md.type_cour TypeCour, md.nb_groupe as NbGroupe, md.ppn_id as PPN
        FROM module_details md, enseignant e, semaine s
        WHERE md.semaine = s.id
        AND md.trigramme_id = e.id
        AND md.type_cour = 'TP'");
    }
}
