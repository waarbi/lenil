<?php

namespace App\Repository\Admin;

use App\Entity\Admin\Article;
use App\Entity\Admin\ArticleCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    public function getSearchArticleByTitle($title){
        $query =  $this->createQueryBuilder('article')
            ->where("article.title LIKE :keySearch")
            ->setParameter("keySearch", '%'.$title.'%')->orWhere("article.content LIKE :searchIncontent")->setParameter("searchIncontent", '%'.$title.'%');

        return $query->getQuery()->getResult();
    }
}
