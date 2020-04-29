<?php

namespace App\DataFixtures;

use App\Entity\Admin\Article;
use App\Entity\Admin\ArticleCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ArticleFixtures extends Fixture implements FixtureGroupInterface
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        //article
        $faker = Factory::create('FR-fr');
        $imageName = ['propImage_1.png', 'propImage_2.jpg', 'propImage_3.png'];
        $articleCategoriesName = ['Pour Commencer','Paramètres de compte et de profil', 'Mes commandes','Acheter sur lenil','Arnaque','Projet'];
        $articleCategories = array();
        foreach($articleCategoriesName as $name){
            $articleCategory = new ArticleCategory();
            $articleCategory->setPosition(true)->setTitle($name);
            $manager->persist($articleCategory);
            $articleCategories [] = $articleCategory;
        }
        for ($i = 1; $i <= 20; $i++) {
            $article = new Article();
            $article
                ->setTitle($faker->text(20))
                ->setTopImage($faker->randomElement($imageName))
                ->setStatus(true)
                ->setArticleCategory($faker->randomElement($articleCategories))
                ->setContent('<p>' . join('</p><p>', $faker->paragraphs(3)) . '</p>');

            $manager->persist($article);
        }

        $manager->flush();
    }

    public static function getGroups(): array
     {
         return ['group2'];
     }
}
