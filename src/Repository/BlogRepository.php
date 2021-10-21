<?php

namespace App\Repository;

use App\Entity\Blog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Blog|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blog|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blog[]    findAll()
 * @method Blog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blog::class);
    }

    // /**
    //  * @return Blog[] Returns an array of Blog objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    $req ="SELECT * FROM blog WHERE language = 'ar' ORDER BY id DESC"
    */
    public function AfficheBlogArHome()
    {
        return $this->createQueryBuilder('b')
            ->andWhere("b.language = 'ar'")
            ->orderBy('b.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult()
        ;
    }
    public function AfficheBlogArBlog($i)
    {
        return $this->createQueryBuilder('b')
            ->andWhere("b.language = 'ar'")
            ->orderBy('b.id', 'DESC')
            ->setMaxResults($i)
            ->getQuery()
            ->getResult()
        ;
    }
    public function Singleblog($id)
    {
        return $this->createQueryBuilder('b')
            ->andWhere("b.id = '$id'")
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Blog
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
