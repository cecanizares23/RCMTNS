<?php

namespace App\Repository;

use App\Entity\TipoAporte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TipoAporte|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoAporte|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoAporte[]    findAll()
 * @method TipoAporte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoAporteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TipoAporte::class);
    }

//    /**
//     * @return TipoAporte[] Returns an array of TipoAporte objects
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
    public function findOneBySomeField($value): ?TipoAporte
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
