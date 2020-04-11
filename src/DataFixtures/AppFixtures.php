<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Delivery;
use App\Entity\LanguageName;
use App\Entity\Level;
use App\Entity\Pays;
use App\Entity\SkillsName;
use App\Entity\SousCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $cat1 = new Category();
        $cat1->setTitle('Graphics & Design')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
        ->setFeatured(true)->setImage('p1.png')->setSlug('graphics-design');
        $manager->persist($cat1);
        $manager->flush();
        //sous categories de Graphics & Design
            $sous_cat1 = new SousCategory();
            $sous_cat1->setTitle('Logo Design')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('1.jpg')->setSlug('logo-design')->setCategory($cat1)->setInCard(true);
            $manager->persist($sous_cat1);

            $sous_cat2 = new SousCategory();
            $sous_cat2->setTitle('Cartes de visite & Papeterie')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p1.png')->setSlug('business-cards-amp-stationery')->setCategory($cat1);
            $manager->persist($sous_cat2);

            $sous_cat3 = new SousCategory();
            $sous_cat3->setTitle('Illustration')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('5.jpg')->setSlug('illustration')->setCategory($cat1)->setInCard(true);
            $manager->persist($sous_cat3);

            $sous_cat4 = new SousCategory();
            $sous_cat4->setTitle('
Caricatures de dessins animés')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p1.png')->setSlug('cartoons-caricatures')->setCategory($cat1);
            $manager->persist($sous_cat4);

            $sous_cat5 = new SousCategory();
            $sous_cat5->setTitle('Affiches & Flyers')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p1.png')->setSlug('flyers-posters')->setCategory($cat1);
            $manager->persist($sous_cat5);

            $sous_cat6 = new SousCategory();
            $sous_cat6->setTitle('Couvertures et emballages de livres')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p1.png')->setSlug('book-covers-packaging')->setCategory($cat1);
            $manager->persist($sous_cat6);

            $sous_cat7 = new SousCategory();
            $sous_cat7->setTitle('Conception Web et Mobile')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p1.png')->setSlug('web-amp-mobile-design')->setCategory($cat1);
            $manager->persist($sous_cat7);

            $sous_cat8 = new SousCategory();
            $sous_cat8->setTitle('Conception de médias sociaux')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p1.png')->setSlug('social-media-design')->setCategory($cat1);
            $manager->persist($sous_cat8);

            $sous_cat9 = new SousCategory();
            $sous_cat9->setTitle('Bannière publicitaire')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p1.png')->setSlug('banner-ads')->setCategory($cat1);
            $manager->persist($sous_cat9);


            $sous_cat10 = new SousCategory();
            $sous_cat10->setTitle('3D & 2D Models')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p1.png')->setSlug('3d-2d-models')->setCategory($cat1);
            $manager->persist($sous_cat10);

            $sous_cat11 = new SousCategory();
            $sous_cat11->setTitle('T-Shirts')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p1.png')->setSlug('t-shirts')->setCategory($cat1);
            $manager->persist($sous_cat11);

            $sous_cat12 = new SousCategory();
            $sous_cat12->setTitle('Photoshop')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('6.jpg')->setSlug('photoshop-editing')->setCategory($cat1)->setInCard(true);
            $manager->persist($sous_cat12);

            $sous_cat13 = new SousCategory();
            $sous_cat13->setTitle('Presentation Design')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p1.png')->setSlug('presentation-design')->setCategory($cat1);
            $manager->persist($sous_cat13);


            $sous_cat14 = new SousCategory();
            $sous_cat14->setTitle('Autres')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p1.png')->setSlug('others')->setCategory($cat1);
            $manager->persist($sous_cat14);

            //fin categire 1 et ses sous categories

        $cat2 = new Category();
        $cat2->setTitle('Marketing Digital')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p2.jpg')->setSlug('digital-marketing')->setInCard(true);
        $manager->persist($cat2);
        $manager->flush();

            $sous_cat1_de_cat2 = new SousCategory();
            $sous_cat1_de_cat2->setTitle('Social Media Marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p2.png')->setSlug('social-media-marketing')->setCategory($cat2);
            $manager->persist($sous_cat1_de_cat2);

            $sous_cat2_de_cat2 = new SousCategory();
        $sous_cat2_de_cat2->setTitle('SEO')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p2.png')->setSlug('seo')->setCategory($cat2);
            $manager->persist($sous_cat2_de_cat2);

            $sous_cat3_de_cat2 = new SousCategory();
        $sous_cat3_de_cat2->setTitle('Web Traffic')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p2.png')->setSlug('web-traffic')->setCategory($cat2);
            $manager->persist($sous_cat3_de_cat2);

            $sous_cat4_de_cat2 = new SousCategory();
        $sous_cat4_de_cat2->setTitle('Contenu Marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p2.png')->setSlug('contenue-marketing')->setCategory($cat2);
            $manager->persist($sous_cat4_de_cat2);

            $sous_cat5_de_cat2 = new SousCategory();
        $sous_cat5_de_cat2->setTitle('Video Marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p2.png')->setSlug('video-marketing')->setCategory($cat2);
            $manager->persist($sous_cat5_de_cat2);

            $sous_cat6_de_cat2 = new SousCategory();
            $sous_cat6_de_cat2->setTitle('Email Marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p2.png')->setSlug('email-marketing')->setCategory($cat2);
            $manager->persist($sous_cat6_de_cat2);

            $sous_cat7_de_cat2 = new SousCategory();
        $sous_cat7_de_cat2->setTitle('Web Analytics')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p2.png')->setSlug('web-analytics')->setCategory($cat2);
            $manager->persist($sous_cat7_de_cat2);

            $sous_cat8_de_cat2 = new SousCategory();
        $sous_cat8_de_cat2->setTitle('Stratégie marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p2.png')->setSlug('strategie-marketing')->setCategory($cat2);
            $manager->persist($sous_cat8_de_cat2);

            $sous_cat9_de_cat2 = new SousCategory();
        $sous_cat9_de_cat2->setTitle('Influenceur Marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p2.png')->setSlug('influenceur-pour-marketing')->setCategory($cat2);
            $manager->persist($sous_cat9_de_cat2);

            $sous_cat10_de_cat2 = new SousCategory();
        $sous_cat10_de_cat2->setTitle('Recherche de domaine')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p2.png')->setSlug('recherche-de-domaine')->setCategory($cat2);
            $manager->persist($sous_cat10_de_cat2);

            $sous_cat11_de_cat2 = new SousCategory();
        $sous_cat11_de_cat2->setTitle('E-Commerce Marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p2.png')->setSlug('e-commerce-marketing')->setCategory($cat2);
            $manager->persist($sous_cat11_de_cat2);

            $sous_cat12_de_cat2 = new SousCategory();
        $sous_cat12_de_cat2->setTitle('Publicité mobile')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
                ->setFeatured(false)->setImage('p2.png')->setSlug('publicite-mobile')->setCategory($cat2);
            $manager->persist($sous_cat12_de_cat2);



        //fin cat2 et ses sous categories

        $cat3 = new Category();
        $cat3->setTitle('Rédaction & traduction')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p4.png')->setSlug('writing-translation')->setInCard(true);
        $manager->persist($cat3);

        $cat4 = new Category();
        $cat4->setTitle('Video & Animation')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p3.png')->setSlug('video-animation')->setInCard(true);
        $manager->persist($cat4);

        $cat5 = new Category();
        $cat5->setTitle('Programmation')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p5.png')->setSlug('programming-tech')->setParentId(null);
        $manager->persist($cat5);

        $cat6 = new Category();
        $cat6->setTitle('Business')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p6.png')->setSlug('business')->setParentId(null);
        $manager->persist($cat6);

        $cat7 = new Category();
        $cat7->setTitle('Mode de vie')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p7.png')->setSlug('fun-lifestyle')->setParentId(null);
        $manager->persist($cat7);

        $cat8 = new Category();
        $cat8->setTitle('Music & Audio')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p8.png')->setSlug('music-audio')->setParentId(null);
        $manager->persist($cat8);

        //country
        //pays
        $paysName = ['SENEGAL', 'MALI', 'COTE D\'IVOIRE','MAURITANIE', 'CAMEROUN', 'GAMBIE'];
        foreach ($paysName as $name){
            $lepays = new Pays();
            $lepays->setName($name);
            $manager->persist($lepays);
            $pays [] = $lepays;
        }
        //SkillsName
        $skills = ['HTML, CSS3, BOOTSRAP','Javascript, Ajax, JQuery','PHP','PhotoShop','Laravel','Marketing digital'];
        foreach ($skills as $name){
            $skillName = new SkillsName();
            $skillName->setName($name);
            $manager->persist($skillName);
        }
        //LanguageNames
        $laguageNames = ['Français', 'Anglais','Espagnol','Arabe'];
        foreach ($laguageNames as $name){
            $langName = new LanguageName();
            $langName->setName($name);
            $manager->persist($langName);
        }
        //LanguageNames
        $levels = ['Débutant', 'Intermédiaire','Expert'];
        foreach ($levels as $name){
            $oneLevel = new Level();
            $oneLevel->setName($name);
            $manager->persist($oneLevel);
        }

        //Delivery
        $deliveries = ['1 Days', '2 Days','2 Days', '3 Days','4 Days', '5 Days', '6 Days', '7 Days'];
        foreach ($deliveries as $name){
            $oneDelivery= new Delivery();
            $oneDelivery->setTitle($name);
            $manager->persist($oneDelivery);
        }
        $manager->flush();

    }
}
