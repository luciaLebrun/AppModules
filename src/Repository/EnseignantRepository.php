<?php


namespace App\Repository;


use App\Entity\Enseignant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class EnseignantRepository
 * @package App\Repository
 */
class EnseignantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enseignant::class);
    }
}