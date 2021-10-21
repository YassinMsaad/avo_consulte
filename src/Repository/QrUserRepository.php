<?php

namespace App\Repository;

use App\Entity\QrUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QrUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method QrUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method QrUser[]    findAll()
 * @method QrUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QrUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QrUser::class);
    }

    // /**
    //  * @return QrUser[] Returns an array of QrUser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QrUser
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
