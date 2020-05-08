<?php

namespace App\Repository;

use App\Entity\Admin\UserSearchProperty;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function getSearchUserByName(UserSearchProperty $searchProperty, $limit, $offset){
        $query = $this->createQueryBuilder('user')->setMaxResults($limit);
        if ($searchProperty->getName()){
            $query = $query->where("user.firstName LIKE :keySearch")
                ->setParameter("keySearch", '%'.$searchProperty->getName().'%')->orWhere("user.lastName LIKE :name")->setParameter("name", '%'.$searchProperty->getName().'%');
        }
        if (false === is_null($offset))
            $query->setFirstResult($offset);

        if (false === is_null($limit))
            $query->setMaxResults($limit);
        return $query->getQuery()->getResult();
    }
    public function getSearchUserByStringName(string  $searchKey){
        $query = $this->createQueryBuilder('user')
            ->where("user.firstName LIKE :searchFirstname")
            ->setParameter("searchFirstname", '%'.$searchKey.'%')
            ->orWhere("user.lastName LIKE :searchLastname")
            ->setParameter("searchLastname",'%'.$searchKey.'%');

        return $query->getQuery()->getResult();


    }
    public function loadSearchFreelancers(array $onlineFilter, array $levelFilter, array $countryFilter)
    {
        $query = $this->createQueryBuilder('user');
        $query = $query->join('user.userRoles', 'role')
            ->where("role.title LIKE :nomRole")
            ->setParameter("nomRole", '%' .'ROLE_SELLER'. '%');
        if (!empty($levelFilter)) {
            $query = $query->andwhere('user.level IN (:idsLevels)')
                ->setParameter('idsLevels', $levelFilter);
        }
        if (!empty($countryFilter)) {
            $query = $query->andwhere('user.pays IN (:idsCountry)')
                ->setParameter('idsCountry', $countryFilter);
        }
        if (!empty($onlineFilter)) {
            $query = $query->andwhere('user.online = :online')
                ->setParameter('online', true);
        }


        return $query->getQuery()->getResult();

    }
    public function findAllFreelancer()
    {
        $query = $this->createQueryBuilder('user');
        $query = $query->join('user.userRoles', 'role')
        ->where("role.title LIKE :nomRole")
        ->setParameter("nomRole", '%' .'ROLE_SELLER'. '%');

        return $query->getQuery()->getResult();

    }
}
