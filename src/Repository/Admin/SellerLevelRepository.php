<?php

namespace App\Repository\Admin;

use App\Entity\Admin\SellerLevel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SellerLevel|null find($id, $lockMode = null, $lockVersion = null)
 * @method SellerLevel|null findOneBy(array $criteria, array $orderBy = null)
 * @method SellerLevel[]    findAll()
 * @method SellerLevel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SellerLevelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SellerLevel::class);
    }

    // /**
    //  * @return SellerLevel[] Returns an array of SellerLevel objects
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
    public function findOneBySomeField($value): ?SellerLevel
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
