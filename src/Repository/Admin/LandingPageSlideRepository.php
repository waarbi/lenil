<?php

namespace App\Repository\Admin;

use App\Entity\Admin\LandingPageSlide;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LandingPageSlide|null find($id, $lockMode = null, $lockVersion = null)
 * @method LandingPageSlide|null findOneBy(array $criteria, array $orderBy = null)
 * @method LandingPageSlide[]    findAll()
 * @method LandingPageSlide[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LandingPageSlideRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LandingPageSlide::class);
    }

    // /**
    //  * @return LandingPageSlide[] Returns an array of LandingPageSlide objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LandingPageSlide
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
