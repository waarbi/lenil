<?php

namespace App\Controller\Admin;

use App\Entity\Admin\GeneralSetting;
use App\Entity\Proposal;
use App\Entity\SellerLevel;
use App\Entity\User;
use App\Form\Admin\SellerLevelType;
use App\Services\PaginationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminDashboardController extends AbstractController
{
    private $manager;
    private $generalSettings;
    private $nbProposal;


    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->generalSettings = $manager->getRepository(GeneralSetting::class)->findAll()[0];
        $this->nbProposal = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::REQUEST_STATUS_INPROGRESS));



    }

    /**
     * @Route("/", name="admin_dashboard")
     */
    public function index()
    {   
        $nbUser = $this->manager->getRepository(User::class)->findAll();
        //$nbOrder = $this->manager->getRepository(Proposal::class)->findAll();
        //$nbSupportRequest = $this->manager->getRepository(Proposal::class)->findAll();

        return $this->render('admin/dashboard/index.html.twig', [
            'user' => $this->getUser(),
            'nbUser' => count($nbUser),
            'nbProposal' => count($this->nbProposal),
            'generalSettings' => $this->generalSettings

        ]);
    }
    /**
     * @Route("/seller/level/page/{page<\d+>?1}", name="admin_index_seller_level", methods={"GET","POST"})
     * @param $page
     * @param PaginationService $paginationService
     * @return Response
     */
    public function indexAdminSellerLevel($page,PaginationService $paginationService): Response
    {
        $paginationService->setEntityClass(SellerLevel::class)->setPage($page);
        return $this->render('admin/dashboard/seller-level-index.html.twig', [
            'pagination' => $paginationService,
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/seller/level/edit/{id}", name="admin_edit_seller_level", methods={"GET","POST"})
     * @param Request $request
     * @param SellerLevel $sellerLevel
     * @return Response
     */
    public function editSellerLevel(Request $request, SellerLevel $sellerLevel ): Response
    {
        $form = $this->createForm(SellerLevelType::class, $sellerLevel);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $this->manager->persist($sellerLevel);
            $this->manager->flush();

            $this->addFlash('success', 'Vous avez modifié le niveau vendeur');
            return $this->redirectToRoute('admin_index_seller_level');
        }
        return $this->render('admin/dashboard/seller-level-edit.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),


        ]);
    }
}
