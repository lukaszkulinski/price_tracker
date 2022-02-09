<?php

namespace App\Repository;

use App\Entity\SizeUnit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SizeUnit|null find($id, $lockMode = null, $lockVersion = null)
 * @method SizeUnit|null findOneBy(array $criteria, array $orderBy = null)
 * @method SizeUnit[]    findAll()
 * @method SizeUnit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SizeUnitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SizeUnit::class);
    }

    // /**
    //  * @return SizeUnit[] Returns an array of SizeUnit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SizeUnit
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
