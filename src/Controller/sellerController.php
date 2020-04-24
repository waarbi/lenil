<?php


namespace App\Controller;


use App\Entity\Proposal;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class sellerController extends AbstractController
{


    private $categories_yes;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->categories_yes = $manager->getRepository('App\Entity\Category')->findBy(array('featured' => true));

    }

    /**
     * @Route("/start_selling", name="start_selling")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function startSelling(EntityManagerInterface $manager)
    {
        //recuperation des freelancers
        return $this->render('seller/landing_page_start_selling.html.twig',
            array(
                'categories_yes' => $this->categories_yes,
            ));
    }
    /**
     * @Route("/dashboard/",name="dashboard_seller")
     * @IsGranted("ROLE_USER")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function dashboardSeller(EntityManagerInterface $manager)
    {
       $user = $this->getUser();

        return $this->render('seller/dashboard.html.twig',
            array(
               'seller' => $user,
                'categories_yes' => $this->categories_yes,

            ));

    }


}