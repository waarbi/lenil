<?php


namespace App\Controller;


use App\Entity\Role;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class sellerController extends AbstractController
{


    private $categories_yes;
    private $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->categories_yes = $manager->getRepository('App\Entity\Category')->findBy(array('featured' => true));
        $this->manager = $manager;

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

    /**
     * @Route("/devenir/acheteur/{id}", name="become_buyer")
     * @param User $user
     * @return Response
     */
    public function becomeBuyer(User $user)
    {
        $roles = $user->getRoles();
        if (!in_array("ROLE_BUYER", $roles)) {
            $roleBuyer = $this->manager->getRepository(Role::class)->findBy(array('title' => Role::ROLE_BUYER))[0];
            $user->addUserRole($roleBuyer);

            $this->manager->persist($user);
            $this->manager->flush();
        }
        return $this->redirectToRoute('home_acheteur');
    }

    /**
     * @Route("/devenir/vendeur/{id}", name="become_seller")
     * @param User $user
     * @param EntityManagerInterface $manager
     * @param Request $request
     * @return Response
     */
    public function becomeSeller(User $user, EntityManagerInterface $manager, Request $request)
    {
        $description = $request->get('description');
        $description ? $user->setDescription($description) : null;
        $roles = $user->getRoles();
        if (!in_array("ROLE_SELLER", $roles)) {
            $roleSeller = $this->manager->getRepository(Role::class)->findBy(array('title' => Role::ROLE_SELLER))[0];
            $user->addUserRole($roleSeller);
        }
        $this->manager->persist($user);
        $this->manager->flush();
        return $this->redirectToRoute('account_index');

    }

    /**
     * @Route("/setdescription/", name="set_description")
     * @param Request $request
     * @return JsonResponse
     */
    public function ajaxSetDescription(Request $request){
        $userId = $request->get('id');
        $description = $request->get('description');
        $user = $this->manager->getRepository(User::class)->find($userId);
        if ($user){
            $user->setDescription($description);
            $this->manager->persist($user);
            $this->manager->flush();
        }
        return new JsonResponse(array('description' => $description));
    }


}