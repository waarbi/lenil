<?php


namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class sellerController extends AbstractController
{
    /**
     * @Route("/espace-vendeur", name="index_espace_seller")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function index(EntityManagerInterface $manager)
    {
        $categories_yes = $manager->getRepository('App\Entity\Category')->findBy(array('featured' => true));
        //recuperation des freelancers
        return $this->render('seller/index.html.twig',
            array(
                'categories_yes' => $categories_yes,
            ));
    }
    /**
     * @Route("/start_selling", name="start_selling")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function startSelling(EntityManagerInterface $manager)
    {
        $categories_yes = $manager->getRepository('App\Entity\Category')->findBy(array('featured' => true));
        //recuperation des freelancers
        return $this->render('seller/landing_page_start_selling.html.twig',
            array(
                'categories_yes' => $categories_yes,
            ));
    }

}