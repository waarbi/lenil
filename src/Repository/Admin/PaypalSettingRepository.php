<?php

namespace App\Repository\Admin;

use App\Entity\Admin\PaypalSetting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PaypalSetting|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaypalSetting|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaypalSetting[]    findAll()
 * @method PaypalSetting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaypalSettingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaypalSetting::class);
    }

    // /**
    //  * @return PaypalSetting[] Returns an array of PaypalSetting objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PaypalSetting
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
