<?php

namespace App\Repository;

use App\Entity\Admin\ProposalSearchProperty;
use App\Entity\Proposal;
use App\Entity\ProposalSearchByTitle;
use App\Entity\User;
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
    public function getSearchProposalByTitle(ProposalSearchByTitle $searchByTitle){
        $query = $this->createQueryBuilder('proposal')
            ->where("proposal.title LIKE :searchTitle")
            ->setParameter("searchTitle", '%'.$searchByTitle->getTitle().'%')
            ->orWhere("proposal.description LIKE :searchDescription")
            ->setParameter("searchDescription",'%'.$searchByTitle->getTitle().'%');
        return $query->getQuery()->getResult();

    }
    public function getSearchProposalByStringTitle(string  $searchKey){
        $query = $this->createQueryBuilder('proposal')
            ->where("proposal.title LIKE :searchTitle")
            ->setParameter("searchTitle", '%'.$searchKey.'%')
            ->orWhere("proposal.description LIKE :searchDescription")
            ->setParameter("searchDescription",'%'.$searchKey.'%');
        return $query->getQuery()->getResult();

    }

    public function loadSearchProposal(string  $searchKey, array $onlineFilter, array $categoriesFilter, array $deliveryFilter, array $levelFilter){

        $query = $this->createQueryBuilder('proposal')
            ->where("proposal.title LIKE :searchTitle")
            ->setParameter("searchTitle", '%'.$searchKey.'%')
            ->orWhere("proposal.description LIKE :searchDescription")
            ->setParameter("searchDescription",'%'.$searchKey.'%');

        if (!empty($categoriesFilter)){
            $query = $query->andWhere('proposal.category IN (:idsCat)')
                ->setParameter('idsCat', $categoriesFilter);
        }
        if (!empty($deliveryFilter)){
            $query = $query->andWhere('proposal.deliveryTime IN (:idsDelivery)')
                ->setParameter('idsDelivery', $deliveryFilter);
        }
        if (!empty($levelFilter) || !empty($onlineFilter) ){
            $query = $query->join('proposal.seller', 'user');
        }
        if (!empty($levelFilter)){
            $query = $query->andwhere('user.level IN (:idsLevels)')
                ->setParameter('idsLevels',$levelFilter );
        }
        if (!empty($onlineFilter)){
            $query = $query->andwhere('user.online = :online')
                ->setParameter('online', true);
        }

        return $query->getQuery()->getResult();

    }

    public function loadSearchFeaturedProposal(array $onlineFilter, array $categoriesFilter, array $deliveryFilter, array $levelFilter, $status){
        $query = $this->createQueryBuilder('proposal')
            ->distinct('proposal.seller ')
            ->where("proposal.statusId = :status")
            ->setParameter("status", $status)
            ->andWhere("proposal.featured = :featured")
            ->setParameter("featured", true);

        if (!empty($categoriesFilter)){
            $query = $query->andWhere('proposal.category IN (:idsCat)')
                ->setParameter('idsCat', $categoriesFilter);
        }
        if (!empty($deliveryFilter)){
            $query = $query->andWhere('proposal.deliveryTime IN (:idsDelivery)')
                ->setParameter('idsDelivery', $deliveryFilter);
        }
        if (!empty($levelFilter) || !empty($onlineFilter) ){
            $query = $query->join('proposal.seller', 'user');
        }
        if (!empty($levelFilter)){
            $query = $query->andwhere('user.level IN (:idsLevels)')
                ->setParameter('idsLevels',$levelFilter );
        }
        if (!empty($onlineFilter)){
            $query = $query->andwhere('user.online = :online')
                ->setParameter('online', true);
        }

        return $query->getQuery()->getResult();

    }

    public function loadSearchTopProposal(array $onlineFilter, array $categoriesFilter, array $deliveryFilter, array $levelFilter, $status){
        $query = $this->createQueryBuilder('proposal')
            ->distinct('proposal.seller')
            ->where("proposal.statusId = :status")
            ->setParameter("status", $status)
            ->andWhere("proposal.topRated = :topRated")
            ->setParameter("topRated", true)
            ->orderBy('proposal.seller', 'DESC');

        if (!empty($categoriesFilter)){
            $query = $query->andWhere('proposal.category IN (:idsCat)')
                ->setParameter('idsCat', $categoriesFilter);
        }
        if (!empty($deliveryFilter)){
            $query = $query->andWhere('proposal.deliveryTime IN (:idsDelivery)')
                ->setParameter('idsDelivery', $deliveryFilter);
        }
        if (!empty($levelFilter) || !empty($onlineFilter) ){
            $query = $query->join('proposal.seller', 'user');
        }
        if (!empty($levelFilter)){
            $query = $query->andwhere('user.level IN (:idsLevels)')
                ->setParameter('idsLevels',$levelFilter );
        }
        if (!empty($onlineFilter)){
            $query = $query->andwhere('user.online = :online')
                ->setParameter('online', true);
        }

        return $query->getQuery()->getResult();

    }

    public function loadSearchRandomProposal(array $onlineFilter, array $categoriesFilter, array $deliveryFilter, array $levelFilter, $status){

        $totalRowsTable = $this->createQueryBuilder('proposal')
            ->select('count(proposal.id)')
            ->distinct('proposal.seller')
            ->where("proposal.statusId = :status")
            ->setParameter("status", $status)
            ->orderBy('proposal.seller', 'DESC')
            ->getQuery()->getSingleScalarResult();

        $random_ids = $this->UniqueRandomNumbersWithinRange(1,$totalRowsTable,8);

        $query = $this->createQueryBuilder('proposal')
            ->where('proposal.id IN (:ids)') // if is another field, change it
            ->setParameter('ids', $random_ids);

        if (!empty($categoriesFilter)){
            $query = $query->andWhere('proposal.category IN (:idsCat)')
                ->setParameter('idsCat', $categoriesFilter);
        }
        if (!empty($deliveryFilter)){
            $query = $query->andWhere('proposal.deliveryTime IN (:idsDelivery)')
                ->setParameter('idsDelivery', $deliveryFilter);
        }
        if (!empty($levelFilter) || !empty($onlineFilter) ){
            $query = $query->join('proposal.seller', 'user');
        }
        if (!empty($levelFilter)){
            $query = $query->andwhere('user.level IN (:idsLevels)')
                ->setParameter('idsLevels',$levelFilter );
        }
        if (!empty($onlineFilter)){
            $query = $query->andwhere('user.online = :online')
                ->setParameter('online', true);
        }

        return $query->getQuery()->getResult();

    }


    public function getFeaturedProposals($status, $maxResult = null){

        $query = $this->createQueryBuilder('proposal')
            ->distinct('proposal.seller')
            ->where("proposal.statusId = :status")
            ->setParameter("status", $status)
            ->andWhere("proposal.featured = :featured")
            ->orderBy('proposal.seller', 'DESC')
            ->setParameter("featured", true)
            ->setMaxResults($maxResult);

        return $query->getQuery()->getResult();
    }

    public function getTopProposals($status, $maxResult = null){

        $query = $this->createQueryBuilder('proposal')
            ->distinct('proposal.seller')
            ->where("proposal.statusId = :status")
            ->setParameter("status", $status)
            ->andWhere("proposal.topRated = :topRated")
            ->orderBy('proposal.seller', 'DESC')
            ->setParameter("topRated", true)
            ->setMaxResults($maxResult);

        return $query->getQuery()->getResult();
    }

    function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }

    public function getRandomProposals($status, $maxResult = null){
        $totalRowsTable = $this->createQueryBuilder('proposal')
            ->select('count(proposal.id)')
            ->distinct('proposal.seller')
            ->where("proposal.statusId = :status")
            ->setParameter("status", $status)
            ->orderBy('proposal.seller', 'DESC')
            ->getQuery()->getSingleScalarResult();

        $random_ids = $this->UniqueRandomNumbersWithinRange(1,$totalRowsTable,$maxResult);

        $query = $this->createQueryBuilder('proposal')
            ->where('proposal.id IN (:ids)') // if is another field, change it
            ->setParameter('ids', $random_ids)
            ->setMaxResults($maxResult);

        return $query->getQuery()->getResult();
    }

    public function getUserProposals($user, $status){
        $query = $this->createQueryBuilder('proposal')
            ->distinct('proposal.seller')
            ->where("proposal.statusId = :status")
            ->setParameter("status", $status)
            ->andWhere("proposal.seller = :seller")
            ->setParameter("seller", $user);

        return $query->getQuery()->getResult();
    }
}
