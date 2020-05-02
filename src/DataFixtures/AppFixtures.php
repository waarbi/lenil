<?php

namespace App\DataFixtures;

use App\Entity\Admin\GeneralPaymentSetting;
use App\Entity\Admin\GeneralSetting;
use App\Entity\Admin\HomePageSection;
use App\Entity\Admin\LandingPageSlide;
use App\Entity\Admin\PaypalSetting;
use App\Entity\Admin\StripeSetting;
use App\Entity\Category;
use App\Entity\DeliveryTime;
use App\Entity\LanguageName;
use App\Entity\Level;
use App\Entity\Pays;
use App\Entity\Proposal;
use App\Entity\ProposalImage;
use App\Entity\Role;
use App\Entity\SellerLevel;
use App\Entity\SkillsName;
use App\Entity\SousCategory;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture implements FixtureGroupInterface
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        //country
        //pays
        $pays = [];
        $paysName = ['SENEGAL', 'MALI', 'COTE D\'IVOIRE', 'MAURITANIE', 'CAMEROUN', 'GAMBIE'];
        foreach ($paysName as $name) {
            $lepays = new Pays();
            $lepays->setName($name);
            $manager->persist($lepays);
            $pays [] = $lepays;
        }
        //sellerLevel
        $sellerLevel = [];
        $sellerLevelName = ['Haut niveau', 'Niveau 2', 'Niveau 1', 'Nouveau vendeur'];
        foreach ($sellerLevelName as $item) {
            $level = new SellerLevel();
            $level->setName($item);
            $manager->persist($level);
            $sellerLevel [] = $level;
        }

        //user
        $faker = Factory::create('FR-fr');

        $adminRole = new Role();
        $adminRole->setTitle('ROLE_ADMIN');
        $manager->persist($adminRole);

        $adminUser = new User();
        $adminUser->setFirstName('Lenil')
            ->setPays($pays[1])
            ->setLastName('Tech')
            ->setEmail('lenil@symfony.com')
            ->setHash($this->encoder->encodePassword($adminUser, 'password'))
            ->setPicture('tof-admin.png')
            ->setDescription('<p>' . join('</p><p>', $faker->paragraphs(3)) . '</p>')
            ->setLevel($faker->randomElement($sellerLevel))
            ->addUserRole($adminRole);

        $manager->persist($adminUser);

        //Nous gérons les utilisateurs
        $users = [];
        $genres = ['male', 'female'];

        for ($i = 1; $i <= 20; $i++) {
            $user = new User();
            $genre = $faker->randomElement($genres);
            $picture = 'https://randomuser.me/api/portraits/';
            $pictureId = $faker->numberBetween(1, 99) . '.jpg';
            $picture .= ($genre == 'male' ? 'men/' : 'women/') . $pictureId;

            $hash = $this->encoder->encodePassword($user, 'password');

            $user->setFirstName($faker->firstname)
                ->setLastName($faker->Lastname)
                ->setEmail($faker->email)
                ->setDescription('<p>' . join('</p><p>', $faker->paragraphs(3)) . '</p>')
                ->setHash($hash)
                ->setPicture($picture)
                ->setPays($faker->randomElement($pays))
                ->setLevel($faker->randomElement($sellerLevel))
                ->setEnabled($faker->boolean);

            $manager->persist($user);
            $users[] = $user;

        }


        //categories et sous categories
        $cat1 = new Category();
        $cat1->setTitle('Graphics & Design')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p1.png')->setInCard(true)->setSlug('graphics-design')->setCardPicture('1.jpg');
        $manager->persist($cat1);
        $manager->flush();
        //sous categories de Graphics & Design
        $sous_cat1 = new SousCategory();
        $sous_cat1->setTitle('Logo Design')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('logo-design')->setCategory($cat1);
        $manager->persist($sous_cat1);

        $sous_cat2 = new SousCategory();
        $sous_cat2->setTitle('Cartes de visite & Papeterie')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('business-cards-amp-stationery')->setCategory($cat1);
        $manager->persist($sous_cat2);

        $sous_cat3 = new SousCategory();
        $sous_cat3->setTitle('Illustration')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('illustration')->setCategory($cat1);
        $manager->persist($sous_cat3);

        $sous_cat4 = new SousCategory();
        $sous_cat4->setTitle('Caricatures de dessins animés')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('cartoons-caricatures')->setCategory($cat1);
        $manager->persist($sous_cat4);

        $sous_cat5 = new SousCategory();
        $sous_cat5->setTitle('Affiches & Flyers')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('flyers-posters')->setCategory($cat1);
        $manager->persist($sous_cat5);

        $sous_cat6 = new SousCategory();
        $sous_cat6->setTitle('Couvertures et emballages de livres')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('book-covers-packaging')->setCategory($cat1);
        $manager->persist($sous_cat6);

        $sous_cat7 = new SousCategory();
        $sous_cat7->setTitle('Conception Web et Mobile')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('web-amp-mobile-design')->setCategory($cat1);
        $manager->persist($sous_cat7);

        $sous_cat8 = new SousCategory();
        $sous_cat8->setTitle('Conception de médias sociaux')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('social-media-design')->setCategory($cat1);
        $manager->persist($sous_cat8);

        $sous_cat9 = new SousCategory();
        $sous_cat9->setTitle('Bannière publicitaire')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('banner-ads')->setCategory($cat1);
        $manager->persist($sous_cat9);


        $sous_cat10 = new SousCategory();
        $sous_cat10->setTitle('3D & 2D Models')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('3d-2d-models')->setCategory($cat1);
        $manager->persist($sous_cat10);

        $sous_cat11 = new SousCategory();
        $sous_cat11->setTitle('T-Shirts')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('t-shirts')->setCategory($cat1);
        $manager->persist($sous_cat11);

        $sous_cat12 = new SousCategory();
        $sous_cat12->setTitle('Photoshop')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('photoshop-editing')->setCategory($cat1);
        $manager->persist($sous_cat12);

        $sous_cat13 = new SousCategory();
        $sous_cat13->setTitle('Presentation Design')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('presentation-design')->setCategory($cat1);
        $manager->persist($sous_cat13);


        $sous_cat14 = new SousCategory();
        $sous_cat14->setTitle('Autres')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('others')->setCategory($cat1);
        $manager->persist($sous_cat14);

        //fin categire 1 et ses sous categories

        $cat2 = new Category();
        $cat2->setTitle('Marketing Digital')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p2.png')->setSlug('digital-marketing')->setInCard(true);
        $manager->persist($cat2);
        $manager->flush();

        $sous_cat1_de_cat2 = new SousCategory();
        $sous_cat1_de_cat2->setTitle('Social Media Marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('social-media-marketing')->setCategory($cat2);
        $manager->persist($sous_cat1_de_cat2);

        $sous_cat2_de_cat2 = new SousCategory();
        $sous_cat2_de_cat2->setTitle('SEO')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('seo')->setCategory($cat2);
        $manager->persist($sous_cat2_de_cat2);

        $sous_cat3_de_cat2 = new SousCategory();
        $sous_cat3_de_cat2->setTitle('Web Traffic')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('web-traffic')->setCategory($cat2);
        $manager->persist($sous_cat3_de_cat2);

        $sous_cat4_de_cat2 = new SousCategory();
        $sous_cat4_de_cat2->setTitle('Contenu Marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('contenue-marketing')->setCategory($cat2);
        $manager->persist($sous_cat4_de_cat2);

        $sous_cat5_de_cat2 = new SousCategory();
        $sous_cat5_de_cat2->setTitle('Video Marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('video-marketing')->setCategory($cat2);
        $manager->persist($sous_cat5_de_cat2);

        $sous_cat6_de_cat2 = new SousCategory();
        $sous_cat6_de_cat2->setTitle('Email Marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('email-marketing')->setCategory($cat2);
        $manager->persist($sous_cat6_de_cat2);

        $sous_cat7_de_cat2 = new SousCategory();
        $sous_cat7_de_cat2->setTitle('Web Analytics')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('web-analytics')->setCategory($cat2);
        $manager->persist($sous_cat7_de_cat2);

        $sous_cat8_de_cat2 = new SousCategory();
        $sous_cat8_de_cat2->setTitle('Stratégie marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('strategie-marketing')->setCategory($cat2);
        $manager->persist($sous_cat8_de_cat2);

        $sous_cat9_de_cat2 = new SousCategory();
        $sous_cat9_de_cat2->setTitle('Influenceur Marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('influenceur-pour-marketing')->setCategory($cat2);
        $manager->persist($sous_cat9_de_cat2);

        $sous_cat10_de_cat2 = new SousCategory();
        $sous_cat10_de_cat2->setTitle('Recherche de domaine')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('recherche-de-domaine')->setCategory($cat2);
        $manager->persist($sous_cat10_de_cat2);

        $sous_cat11_de_cat2 = new SousCategory();
        $sous_cat11_de_cat2->setTitle('E-Commerce Marketing')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('e-commerce-marketing')->setCategory($cat2);
        $manager->persist($sous_cat11_de_cat2);

        $sous_cat12_de_cat2 = new SousCategory();
        $sous_cat12_de_cat2->setTitle('Publicité mobile')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setSlug('publicite-mobile')->setCategory($cat2);
        $manager->persist($sous_cat12_de_cat2);


        //fin cat2 et ses sous categories

        $cat3 = new Category();
        $cat3->setTitle('Rédaction & traduction')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p4.png')->setSlug('writing-translation')->setInCard(true);
        $manager->persist($cat3);

        $cat4 = new Category();
        $cat4->setTitle('Video & Animation')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p3.png')->setSlug('video-animation')->setCardPicture('4.jpg')->setInCard(true);
        $manager->persist($cat4);

        $cat5 = new Category();
        $cat5->setTitle('Programmation')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p5.png')->setCardPicture('2.jpg')->setSlug('programming-tech')->setInCard(true);
        $manager->persist($cat5);

        $cat6 = new Category();
        $cat6->setTitle('Business')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p6.png')->setCardPicture('3.jpg')->setSlug('business')->setParentId(null);
        $manager->persist($cat6);

        $cat7 = new Category();
        $cat7->setTitle('Mode de vie')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p7.png')->setSlug('fun-lifestyle')->setParentId(null);
        $manager->persist($cat7);

        $cat8 = new Category();
        $cat8->setTitle('Music & Audio')->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.')
            ->setFeatured(true)->setImage('p8.png')->setSlug('music-audio')->setCardPicture('5.jpg')->setParentId(null);
        $manager->persist($cat8);

        //SkillsName
        $skills = ['HTML, CSS3, BOOTSRAP', 'Javascript, Ajax, JQuery', 'PHP', 'PhotoShop', 'Laravel', 'Marketing digital'];
        foreach ($skills as $name) {
            $skillName = new SkillsName();
            $skillName->setName($name);
            $manager->persist($skillName);
        }
        //LanguageNames
        $laguageNames = ['Français', 'Anglais', 'Espagnol', 'Arabe'];
        foreach ($laguageNames as $name) {
            $langName = new LanguageName();
            $langName->setName($name);
            $manager->persist($langName);
        }
        //LanguageNames
        $levels = ['Débutant', 'Intermédiaire', 'Expert'];
        foreach ($levels as $name) {
            $oneLevel = new Level();
            $oneLevel->setName($name);
            $manager->persist($oneLevel);
        }

        //Delivery

        $deliveriesNames = ['Jusqu\'à 1 jour' => '1 jour', 'Jusqu\'à 2 jours' => '2 jours', 'Jusqu\'à 3 jours' => '3 jours', 'Jusqu\'à 4 jours' => '4 jours', 'Jusqu\'à 5 jours' => '5 jours', 'Jusqu\'à 6 jours' => '6 jours', 'Jusqu\'à 7 jours' => '7 jours', 'Juste 5 minutes' => '5 minutes'];
        $deliveries = [];
        foreach ($deliveriesNames as $key => $value) {
            $delivery = new DeliveryTime();
            $delivery->setTitle($key);
            $delivery->setName($value);
            $manager->persist($delivery);
            $deliveries [] = $delivery;
        }
        //general settings
        $generalSetting = new GeneralSetting();
        $generalSetting->setSiteAuthor('Waarbi')->setSiteTitle('Lenil | Plateforme des freelancers africains')
            ->setSiteDescription('La mission de lenil est de lutter contre le chomage en Afrique. Lenil connecte les entreprises avec des talants en Afrique qui offrant des services numériques.')
            ->setEnableKnowledgeBank(true)->setEnableMaintenanceMode(false)->setGoogleRecaptchaSecretKey('rechapchatCleSecret')->setGoogleRecaptchaSiteKey('RecapchatCleSITE')->setSiteKeywords('freelancer africain, tech, fiverr africain, services numériques,online marketplace, emploi des jeunes, talents africains')
            ->setSiteEmail('contact@lenil.tech');
        $manager->persist($generalSetting);


        //section des slides au niveau de la homePage
        $sectionHomePage = new HomePageSection();
        $sectionHomePage->setHeading('ARRETEZ DE REVER ET REALISEZ VOS PROJETS')->setShortHeading('Trouver les meilleurs freelancers africains');
        $manager->persist($sectionHomePage);

        //slider
        $slider1 = new LandingPageSlide();
        $slider1->setTitle('slider1')->setImageName('cover-main-one.png')->setIsActivate(true)->setOnHomePageAnonym(true)->setOnHomePageSeller(false);
        $slider2 = new LandingPageSlide();
        $slider2->setTitle('slider2')->setImageName('cover-main-two.png')->setIsActivate(false)->setOnHomePageAnonym(true)->setOnHomePageSeller(false);
        $slider3 = new LandingPageSlide();
        $slider3->setTitle('slider1')->setImageName('cover-main-one.png')->setIsActivate(true)->setOnHomePageAnonym(false)->setOnHomePageSeller(true);
        $slider4 = new LandingPageSlide();
        $slider4->setTitle('slider2')->setImageName('cover-main-two.png')->setIsActivate(false)->setOnHomePageAnonym(false)->setOnHomePageSeller(true);

        $manager->persist($slider1);
        $manager->persist($slider2);
        $manager->persist($slider3);
        $manager->persist($slider4);

        //paramètres generaux de paiements
        $paiement = new GeneralPaymentSetting();
        $paiement->setCommissionProcessing(5)->setDurationFeatured(2)->setPriceFeaturedProposal(10);
        $manager->persist($paiement);

        // Paramètre paiement Paypal
        $paypal = new PaypalSetting();
        $paypal->setEmail('contact@lenil.tech')->setAppClientId('appClientIdPAYPAL')->setAppClientSecret('cleSecretApiPaypal')->setCurrency('EUR')->setEnabled(true)->setPaypalSandbox(true);
        $manager->persist($paypal);

        //paramètre paiement stripe
        $stripe = new StripeSetting();
        $stripe->setEnabled(true)->setCurrency('EUR')->setPublishableKey('publishabledKey')->setSecretKey('SecretKepStripe');
        $manager->persist($stripe);

        //sellerLevel
        $sellerLevelName = ['Haut niveau', 'Niveau 2', 'Niveau 1', 'Nouveau vendeur'];

        foreach ($sellerLevelName as $item) {
            $level = new SellerLevel();
            $level->setName($item);
            $manager->persist($level);
        }
        //ProposalImages
        $imageName = ['propImage_1.png', 'propImage_2.jpg', 'propImage_3.png'];
        $proposalsImage = array();
        foreach ($imageName as $item) {
            $propIm = new ProposalImage();
            $propIm->setFileName($item);
            $manager->persist($propIm);
            $proposalsImage [] = $propIm;
        }

        foreach ($sellerLevelName as $item) {
            $level = new SellerLevel();
            $level->setName($item);
            $manager->persist($level);
        }
        //services
        $categories = [$cat1, $cat2, $cat3, $cat4, $cat5, $cat6, $cat7, $cat8];
        $subcategories = [$sous_cat1, $sous_cat2, $sous_cat3, $sous_cat4, $sous_cat5];
        $status = [1, 2, 3, 4];
        for ($i = 1; $i <= 100; $i++) {
            $proposal = new Proposal();

            $proposal->setDescription('<p>' . join('</p><p>', $faker->paragraphs(3)) . '</p>')
                ->setStatusId($faker->randomElement($status))
                ->setCategory($faker->randomElement($categories))
                ->setSubcategory($faker->randomElement($subcategories))
                ->setTitle($faker->text)
                ->setDeliveryTime($faker->randomElement($deliveries))
                ->setPrice($faker->unique()->numberBetween($min = 5, $max = 200))
                ->setRating($faker->randomElement([1,2,3,4,5]))
                ->setViews($faker->randomElement([11,1,13,14,15,16,17,18,19]))
                ->addProposalImage(($proposalImage = new ProposalImage())->setFileName($faker->randomElement($imageName)))
                ->setFeatured($faker->randomElement([false, true]))
                ->setSeller($faker->randomElement($users))
                ->setTopRated($faker->randomElement([true, false]));

            $manager->persist($proposalImage);
            $manager->persist($proposal);

        }

        $manager->flush();
    }
    public static function getGroups(): array
    {
        return ['group1'];
    }
}
