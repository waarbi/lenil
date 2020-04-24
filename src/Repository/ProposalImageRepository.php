<?php

namespace App\Repository;

use App\Entity\ProposalImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProposalImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProposalImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProposalImage[]    findAll()
 * @method ProposalImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProposalImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProposalImage::class);
    }

    // /**
    //  * @return ProposalImage[] Returns an array of ProposalImage objects
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
    public function findOneBySomeField($value): ?ProposalImage
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
