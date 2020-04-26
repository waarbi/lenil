<?php

namespace App\Repository;

use App\Entity\Admin\ProposalSearchProperty;
use App\Entity\Proposal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Proposal|null find($id, $lockMode = null, $lockVersion = null)
 * @method Proposal|null findOneBy(array $criteria, array $orderBy = null)
 * @method Proposal[]    findAll()
 * @method Proposal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProposalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Proposal::class);
    }

    public function getSearchAd(ProposalSearchProperty $searchProperty, $limit, $offset){
        $query = $this->createQueryBuilder('proposal')->setMaxResults($limit);
        if ($searchProperty->getMaxPrice()){
            $query = $query->andWhere('proposal.price <= :price')
                ->setParameter('price',$searchProperty->getMaxPrice());
        }
        if ($searchProperty->getCategory()){
            $query = $query->andWhere('proposal.category = :category')
                ->setParameter('category',$searchProperty->getCategory());
        }
        if ($searchProperty->getSubcategory()){
            $query = $query->andWhere('proposal.subcategory = :subcategory')
                ->setParameter('subcategory',$searchProperty->getSubcategory());
        }
        if ($searchProperty->getDeliveryTime()){
            $query = $query->andWhere('proposal.deliveryTime = :delivery')
                ->setParameter('delivery',$searchProperty->getDeliveryTime());
        }
        if (false === is_null($offset))
            $query->setFirstResult($offset);

        if (false === is_null($limit))
            $query->setMaxResults($limit);

        return $query->getQuery()->getResult();


    }

}
