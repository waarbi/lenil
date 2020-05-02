<?php

namespace App\Repository;

use App\Entity\Admin\ProposalSearchProperty;
use App\Entity\Proposal;
use App\Entity\ProposalSearchByTitle;
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

    public function getSearchAd(ProposalSearchProperty $searchProperty, $limit, $offset)
    {
        $query = $this->createQueryBuilder('proposal')->setMaxResults($limit);
        if ($searchProperty->getMaxPrice()) {
            $query = $query->andWhere('proposal.price <= :price')
                ->setParameter('price', $searchProperty->getMaxPrice());
        }
        if ($searchProperty->getCategory()) {
            $query = $query->andWhere('proposal.category = :category')
                ->setParameter('category', $searchProperty->getCategory());
        }
        if ($searchProperty->getSubcategory()) {
            $query = $query->andWhere('proposal.subcategory = :subcategory')
                ->setParameter('subcategory', $searchProperty->getSubcategory());
        }
        if ($searchProperty->getDeliveryTime()) {
            $query = $query->andWhere('proposal.deliveryTime = :delivery')
                ->setParameter('delivery', $searchProperty->getDeliveryTime());
        }
        if (false === is_null($offset))
            $query->setFirstResult($offset);

        if (false === is_null($limit))
            $query->setMaxResults($limit);

        return $query->getQuery()->getResult();

    }

    public function getSearchProposalByTitle(ProposalSearchByTitle $searchByTitle)
    {
        $query = $this->createQueryBuilder('proposal')
            ->where("proposal.title LIKE :searchTitle")
            ->setParameter("searchTitle", '%' . $searchByTitle->getTitle() . '%')
            ->orWhere("proposal.description LIKE :searchDescription")
            ->setParameter("searchDescription", '%' . $searchByTitle->getTitle() . '%');
        return $query->getQuery()->getResult();

    }

    public function getSearchProposalByStringTitle(string $searchKey)
    {
        $query = $this->createQueryBuilder('proposal')
            ->where("proposal.title LIKE :searchTitle")
            ->setParameter("searchTitle", '%' . $searchKey . '%')
            ->orWhere("proposal.description LIKE :searchDescription")
            ->setParameter("searchDescription", '%' . $searchKey . '%');
        return $query->getQuery()->getResult();

    }

    public function loadSearchProposal(string $searchKey, array $onlineFilter, array $categoriesFilter, array $deliveryFilter, array $levelFilter, array $countryFilter)
    {
        $query = $this->createQueryBuilder('proposal')
            ->where("proposal.title LIKE :searchTitle")
            ->setParameter("searchTitle", '%' . $searchKey . '%')
            ->orWhere("proposal.description LIKE :searchDescription")
            ->setParameter("searchDescription", '%' . $searchKey . '%');

        if (!empty($categoriesFilter)) {
            $query = $query->andWhere('proposal.category IN (:idsCat)')
                ->setParameter('idsCat', $categoriesFilter);
        }
        if (!empty($deliveryFilter)) {
            $query = $query->andWhere('proposal.deliveryTime IN (:idsDelivery)')
                ->setParameter('idsDelivery', $deliveryFilter);
        }
        if (!empty($levelFilter) || !empty($onlineFilter) || !empty($countryFilter)) {
            $query = $query->join('proposal.seller', 'user');
        }
        if (!empty($levelFilter)) {
            $query = $query->andwhere('user.level IN (:idsLevels)')
                ->setParameter('idsLevels', $levelFilter);
        }
        if (!empty($onlineFilter)) {
            $query = $query->andwhere('user.online = :online')
                ->setParameter('online', true);
        }
        if (!empty($countryFilter)) {
            $query = $query->andwhere('user.pays IN (:idsCountry)')
                ->setParameter('idsCountry', $countryFilter);
        }

        return $query->getQuery()->getResult();

    }

    public function loadCategoryProposal(string $catSlug, string $subCatSlug, array $onlineFilter = null, array $deliveryFilter = null, array $levelFilter = null,  array $countryFilter = null)
    {
        $query = $this->createQueryBuilder('proposal');
        $query = $query->join('proposal.category', 'category')
            ->Where("category.slug = :catSlug")
            ->setParameter("catSlug", $catSlug);
        if ($subCatSlug != 'services') {
            $query = $query->join('proposal.subcategory', 'subcategory')
                ->andWhere("subcategory.slug = :subcatSlug")
                ->setParameter("subcatSlug", $subCatSlug);
        }
        if (!empty($deliveryFilter)) {
            $query = $query->andWhere('proposal.deliveryTime IN (:idsDelivery)')
                ->setParameter('idsDelivery', $deliveryFilter);
        }
        if (!empty($levelFilter) || !empty($onlineFilter) || !empty($countryFilter)) {
            $query = $query->join('proposal.seller', 'user');
        }
        if (!empty($levelFilter)) {
            $query = $query->andwhere('user.level IN (:idsLevels)')
                ->setParameter('idsLevels', $levelFilter);
        }
        if (!empty($onlineFilter)) {
            $query = $query->andwhere('user.online = :online')
                ->setParameter('online', true);
        }
        if (!empty($countryFilter)) {
            $query = $query->andwhere('user.pays IN (:idsCountry)')
                ->setParameter('idsCountry', $countryFilter);
        }

        return $query->getQuery()->getResult();

    }

}
