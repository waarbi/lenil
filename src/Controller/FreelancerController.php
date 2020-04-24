<?php


namespace App\Controller;


use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FreelancerController extends AbstractController
{
    /**
     * @Route("/freelancers", name="index_freelancers")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function index(EntityManagerInterface $manager)
    {
        $categories_yes = $manager->getRepository('App\Entity\Category')->findBy(array('featured' => true));
        //recuperation des freelancers
        return $this->render('freelancer/index.html.twig',
            array(
                'categories_yes' => $categories_yes,
            ));
    }

    /**
     * @Route("/freelance/details/{id}", name="show_freelancer")
     * @param User $user
     * @return Response
     */
    public function show(User $user)
    {
        return $this->render('freelancer/show.html.twig',
            array(
                'freelancer' => $user
            )
        );
    }
}