<?php

namespace App\Repository;

use App\Entity\Tribunaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tribunaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tribunaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tribunaux[]    findAll()
 * @method Tribunaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TribunauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tribunaux::class);
    }

    // /**
    //  * @return Tribunaux[] Returns an array of Tribunaux objects
    //  */
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
    public function findOneBySomeField($value): ?Tribunaux
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
