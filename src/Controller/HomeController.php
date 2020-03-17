<?php


namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function home(EntityManagerInterface $manager)
    {
        $categories_yes = $manager->getRepository('App\Entity\Category')->findBy(array('featured' => true));
        $sous_categories_card = $manager->getRepository('App\Entity\SousCategory')->findBy(array('in_card' => true));
        $categories_cards = $manager->getRepository('App\Entity\Category')->findBy(array('in_card' => true));

        $categories_card = array_merge($sous_categories_card,$categories_cards);

        return $this->render('home.html.twig',
            array(
                'categories_yes' => $categories_yes,
                'categories_card' => $categories_card,
            ));
    }
}