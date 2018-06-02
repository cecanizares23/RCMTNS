<?php

namespace App\Repository;

use App\Entity\TipoSocio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TipoSocio|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoSocio|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoSocio[]    findAll()
 * @method TipoSocio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoSocioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TipoSocio::class);
    }

//    /**
//     * @return TipoSocio[] Returns an array of TipoSocio objects
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
    public function findOneBySomeField($value): ?TipoSocio
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
