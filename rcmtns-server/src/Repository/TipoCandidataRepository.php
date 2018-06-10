<?php

namespace App\Repository;

use App\Entity\TipoCandidata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TipoCandidata|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoCandidata|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoCandidata[]    findAll()
 * @method TipoCandidata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoCandidataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TipoCandidata::class);
    }

//    /**
//     * @return TipoCandidata[] Returns an array of TipoCandidata objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TipoCandidata
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
