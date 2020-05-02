<?php

namespace App\Repository\Admin;

use App\Entity\Admin\StripeSetting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StripeSetting|null find($id, $lockMode = null, $lockVersion = null)
 * @method StripeSetting|null findOneBy(array $criteria, array $orderBy = null)
 * @method StripeSetting[]    findAll()
 * @method StripeSetting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StripeSettingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StripeSetting::class);
    }

    // /**
    //  * @return StripeSetting[] Returns an array of StripeSetting objects
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
    public function findOneBySomeField($value): ?StripeSetting
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
