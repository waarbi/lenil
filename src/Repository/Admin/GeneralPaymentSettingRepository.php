<?php

namespace App\Repository\Admin;

use App\Entity\Admin\GeneralPaymentSetting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GeneralPaymentSetting|null find($id, $lockMode = null, $lockVersion = null)
 * @method GeneralPaymentSetting|null findOneBy(array $criteria, array $orderBy = null)
 * @method GeneralPaymentSetting[]    findAll()
 * @method GeneralPaymentSetting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeneralPaymentSettingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GeneralPaymentSetting::class);
    }

    // /**
    //  * @return GeneralPaymentSetting[] Returns an array of GeneralPaymentSetting objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GeneralPaymentSetting
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
