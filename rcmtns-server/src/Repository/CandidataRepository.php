<?php

namespace App\Repository;

use App\Entity\Candidata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Candidata|null find($id, $lockMode = null, $lockVersion = null)
 * @method Candidata|null findOneBy(array $criteria, array $orderBy = null)
 * @method Candidata[]    findAll()
 * @method Candidata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CandidataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Candidata::class);
    }

}
