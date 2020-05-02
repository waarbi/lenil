<?php


namespace App\Controller\Admin;


use App\Entity\Admin\UserSearchProperty;
use App\Entity\Proposal;
use App\Entity\User;
use App\Form\UserSearchPropertyType;
use App\Services\PaginationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/utilisateurs")
 */
class AdminUserController extends  AbstractController
{
    private $manager;
    private $nbProposal;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->nbProposal = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_INPROGRESS));

    }

    /**
     * @Route("/index/page/{page<\d+>?1}", name="admin_index_utilisateurs", methods={"GET","POST"})
     * @param Request $request
     * @param $page
     * @param PaginationService $paginationService
     * @return Response
     */
    public function indexAdminUsers(Request $request,$page,PaginationService $paginationService): Response
    {

        $search = new UserSearchProperty();

        $form = $this->createForm(UserSearchPropertyType::class,$search);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $paginationService->setEntityClass(User::class)
                ->setPage($page)->setSearch($search);
        }else{
            $paginationService->setEntityClass(User::class)->setPage($page);
        }

        $allUsers = $this->manager->getRepository(User::class)->findAll();

        return $this->render('admin/user/index.html.twig', [
            'user' => $this->getUser(),
            'formSearch' => $form->createView(),
            'pagination' => $paginationService,
            'formSearchUser' => $form->createView(),
            'nbTopRated' => 0,
            'nbNiveau2' => 0,
            'nbNiveau1' => 0,
            'nbNouveauVendeur' => 0,
            'nbProposal' => count($this->nbProposal),
            'totalUsers' => count($allUsers)
        ]);
    }

    /**
     * @Route("/show/utilisateur/{id}",name="admin_show_user")
     * @param User $user
     * @return Response
     */
    public function adminShowUser(User $user){


        return $this->render('admin/user/show.html.twig', array(
            'user' => $this->getUser(),
            'nbProposal' => count($this->nbProposal),
            'utilisateur' => $user,
            'totalRevenueDisponible' => 0,
            'totalRevenuePending' => 0,
            'totalRevenueUsedProposal' => 0,
            'nbCannceledOrder' => 0,
            'nbCompletedOrder' => 0,
            'nbDeliveredOrder' => 0,
            'nbCurrentOrder' => 0,
        ));

    }

    /**
     * @Route("/enabled/utilisateur/{id}",name="admin_bann_or_unlock_user")
     * @param User $user
     * @return RedirectResponse
     */
    public function adminBannOrUnlockUser(User $user){

        $user->setEnabled(!$user->getEnabled());
        $this->manager->persist($user);
        $this->manager->flush();

        return $this->redirectToRoute('admin_index_utilisateurs');

    }

}