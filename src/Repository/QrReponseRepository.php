<?php

namespace App\Repository;

use App\Entity\QrReponse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QrReponse|null find($id, $lockMode = null, $lockVersion = null)
 * @method QrReponse|null findOneBy(array $criteria, array $orderBy = null)
 * @method QrReponse[]    findAll()
 * @method QrReponse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QrReponseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QrReponse::class);
    }

    // /**
    //  * @return QrReponse[] Returns an array of QrReponse objects
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
    public function findOneBySomeField($value): ?QrReponse
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
