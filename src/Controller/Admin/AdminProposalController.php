<?php


namespace App\Controller\Admin;


use App\Entity\Proposal;
use App\Entity\Admin\ProposalSearchProperty;
use App\Form\ProposalSearchPropertyType;
use App\Services\PaginationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/proposals")
 */
class AdminProposalController extends AbstractController
{

    private $manager;
    private $nbProposal;
    private $totalProposals;
    private $nbFeaturedProposals;
    private $nbPauseProposals;
    private $nbCorbeilleProposals;
    private $nbActiveProposals;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->nbProposal = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_INPROGRESS));
        $this->totalProposals = $this->manager->getRepository(Proposal::class)->findAll();
        $this->nbFeaturedProposals = $this->manager->getRepository(Proposal::class)->findBy(array('featured' => true));
        $this->nbPauseProposals = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_PAUSE));
        $this->nbCorbeilleProposals = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_TRUSH));
        $this->nbActiveProposals = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_ACTIVE));

    }

    /**
     * @Route("/index/page/{page<\d+>?1}", name="admin_index_proposals", methods={"GET","POST"})
     * @param Request $request
     * @param $page
     * @param PaginationService $paginationService
     * @return Response
     */
    public function indexAdminProposal(Request $request,$page,PaginationService $paginationService): Response
    {

        $search = new ProposalSearchProperty();
        $form = $this->createForm(ProposalSearchPropertyType::class,$search);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $paginationService->setEntityClass(Proposal::class)
                ->setPage($page)->setSearch($search);
        }else{
            $paginationService->setEntityClass(Proposal::class)
                ->setPage($page);
        }
        return $this->render('admin/proposal/index.html.twig', [
            'pagination' => $paginationService,
            'nbProposal' => count($this->nbProposal),
            'totalPropasals' => count($this->totalProposals),
            'nbFeaturedProposals' => count($this->nbFeaturedProposals),
            'nbPauseProposals' => count($this->nbPauseProposals),
            'nbCorbeilleProposals' => count($this->nbCorbeilleProposals),
            'nbActiveProposals' => count($this->nbActiveProposals),
            'user' => $this->getUser(),
            'formSearch' => $form->createView()
        ]);
    }

    /**
     * @Route("/active/index/", name="admin_index_active_proposals")
     * @param Request $request
     * @return Response
     */
    public function indexActiveProposals(Request $request){

        $search = new ProposalSearchProperty();
        $form = $this->createForm(ProposalSearchPropertyType::class,$search);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->redirectToRoute('admin_index_proposals');
        }
        return $this->render('admin/proposal/active.html.twig', [
            'activeProposals' => $this->nbActiveProposals,
            'nbProposal' => count($this->nbProposal),
            'totalPropasals' => count($this->totalProposals),
            'nbFeaturedProposals' => count($this->nbFeaturedProposals),
            'nbPauseProposals' => count($this->nbPauseProposals),
            'nbCorbeilleProposals' => count($this->nbCorbeilleProposals),
            'nbActiveProposals' => count($this->nbActiveProposals),
            'user' => $this->getUser(),
            'formSearch' => $form->createView()
        ]);
    }
    /**
     * @Route("/featured/index/", name="admin_index_featured_proposals")
     * @param Request $request
     * @return Response
     */
    public function indexFeaturedProposals(Request $request){

        $search = new ProposalSearchProperty();
        $form = $this->createForm(ProposalSearchPropertyType::class,$search);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->redirectToRoute('admin_index_proposals');
        }
        return $this->render('admin/proposal/featured.html.twig', [
            'featuredProposals' => $this->nbFeaturedProposals,
            'nbProposal' => count($this->nbProposal),
            'totalPropasals' => count($this->totalProposals),
            'nbFeaturedProposals' => count($this->nbFeaturedProposals),
            'nbPauseProposals' => count($this->nbPauseProposals),
            'nbCorbeilleProposals' => count($this->nbCorbeilleProposals),
            'nbActiveProposals' => count($this->nbActiveProposals),
            'user' => $this->getUser(),
            'formSearch' => $form->createView()
        ]);
    }
    /**
     * @Route("/pause/index/", name="admin_index_pause_proposals")
     * @param Request $request
     * @return Response
     */
    public function indexPauseProposals(Request $request){

        $search = new ProposalSearchProperty();
        $form = $this->createForm(ProposalSearchPropertyType::class,$search);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->redirectToRoute('admin_index_proposals');
        }
        return $this->render('admin/proposal/pause.html.twig', [
            'pauseProposals' => $this->nbPauseProposals,
            'nbProposal' => count($this->nbProposal),
            'totalPropasals' => count($this->totalProposals),
            'nbFeaturedProposals' => count($this->nbFeaturedProposals),
            'nbPauseProposals' => count($this->nbPauseProposals),
            'nbCorbeilleProposals' => count($this->nbCorbeilleProposals),
            'nbActiveProposals' => count($this->nbActiveProposals),
            'user' => $this->getUser(),
            'formSearch' => $form->createView()
        ]);
    }
    /**
     * @Route("/pending/index/", name="admin_index_pending_proposals")
     * @param Request $request
     * @return Response
     */
    public function indexPendingProposals(Request $request){

        $search = new ProposalSearchProperty();
        $form = $this->createForm(ProposalSearchPropertyType::class,$search);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->redirectToRoute('admin_index_proposals');
        }
        return $this->render('admin/proposal/pending.html.twig', [
            'pendingProposals' => $this->nbProposal,
            'nbProposal' => count($this->nbProposal),
            'totalPropasals' => count($this->totalProposals),
            'nbFeaturedProposals' => count($this->nbFeaturedProposals),
            'nbPauseProposals' => count($this->nbPauseProposals),
            'nbCorbeilleProposals' => count($this->nbCorbeilleProposals),
            'nbActiveProposals' => count($this->nbActiveProposals),
            'user' => $this->getUser(),
            'formSearch' => $form->createView()
        ]);
    }
    /**
     * @Route("/trush/index/", name="admin_index_trush_proposals")
     * @param Request $request
     * @return Response
     */
    public function indexTrushProposals(Request $request){

        $search = new ProposalSearchProperty();
        $form = $this->createForm(ProposalSearchPropertyType::class,$search);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->redirectToRoute('admin_index_proposals');
        }
        return $this->render('admin/proposal/trush.html.twig', [
            'trushProposals' => $this->nbCorbeilleProposals,
            'nbProposal' => count($this->nbProposal),
            'totalPropasals' => count($this->totalProposals),
            'nbFeaturedProposals' => count($this->nbFeaturedProposals),
            'nbPauseProposals' => count($this->nbPauseProposals),
            'nbCorbeilleProposals' => count($this->nbCorbeilleProposals),
            'nbActiveProposals' => count($this->nbActiveProposals),
            'user' => $this->getUser(),
            'formSearch' => $form->createView()
        ]);
    }

    /**
     * @Route("/makefeatured/{id}", name="admin_make_featured_proposals")
     * @param Proposal $proposal
     * @param Request $request
     * @return RedirectResponse
     */
    public function makeFeaturedProposals(Proposal $proposal,Request $request){

        if (is_null($proposal->getFeatured()) || $proposal->getFeatured() === false){
            $proposal->setFeatured(true);
        }else{
            $proposal->setFeatured(false);
        }
        $this->manager->persist($proposal);
        $this->manager->flush();

        return  $this->redirectToRoute('admin_index_featured_proposals');
    }
    /**
     * @Route("/maketoprated/{id}", name="admin_make_toprated_proposals")
     * @param Proposal $proposal
     * @param Request $request
     * @return RedirectResponse
     */
    public function makeTopRatedProposals(Proposal $proposal,Request $request){

        if (is_null($proposal->getTopRated()) || $proposal->getTopRated() === false){
            $proposal->setTopRated(true);
        }else{
            $proposal->setTopRated(false);
        }
        $this->manager->persist($proposal);
        $this->manager->flush();

        $referer = $request->headers->get('referer');
        return $this->redirect($referer);
    }
    /**
     * @Route("/approval/{id}", name="admin_approval_proposal")
     * @param Proposal $proposal
     * @param Request $request
     * @return RedirectResponse
     */
    public function approvalProposal(Proposal $proposal,Request $request){

        $proposal->setStatusId(Proposal::PROPOSAL_STATUS_ACTIVE);
        $this->manager->persist($proposal);
        $this->manager->flush();

        $referer = $request->headers->get('referer');
        return $this->redirect($referer);
    }
    /**
     * @Route("/declined/{id}", name="admin_declined_proposal")
     * @param Proposal $proposal
     * @param Request $request
     * @return RedirectResponse
     */
    public function declinedProposal(Proposal $proposal,Request $request){

        $proposal->setStatusId(Proposal::PROPOSAL_STATUS_DECLINED);

        $this->manager->persist($proposal);
        $this->manager->flush();

        $referer = $request->headers->get('referer');
        return $this->redirect($referer);
    }
    /**
     * @Route("/pause/{id}", name="admin_pause_proposal")
     * @param Proposal $proposal
     * @param Request $request
     * @return RedirectResponse
     */
    public function pauseProposal(Proposal $proposal,Request $request){

        if (is_null($proposal->getStatusId())){
            $proposal->setStatusId(Proposal::PROPOSAL_STATUS_PAUSE);
        }
        if ($proposal->getStatusId() == Proposal::PROPOSAL_STATUS_PAUSE){

            $proposal->setStatusId(Proposal::PROPOSAL_STATUS_ACTIVE);
        }else{
            $proposal->setStatusId(Proposal::PROPOSAL_STATUS_PAUSE);
        }
        $this->manager->persist($proposal);
        $this->manager->flush();

        return $this->redirectToRoute('admin_index_pause_proposals');
    }

    /**
     * @Route("/trush/{id}", name="admin_trush_proposal")
     * @param Proposal $proposal
     * @param Request $request
     * @return RedirectResponse
     */
    public function trushProposal(Proposal $proposal,Request $request){

        if (is_null($proposal->getStatusId()))
            $proposal->setStatusId(Proposal::PROPOSAL_STATUS_TRUSH);
        if ($proposal->getStatusId() == Proposal::PROPOSAL_STATUS_TRUSH){
            $proposal->setStatusId(Proposal::PROPOSAL_STATUS_ACTIVE);
        }else{
            $proposal->setStatusId(Proposal::PROPOSAL_STATUS_TRUSH);
        }
        $this->manager->persist($proposal);
        $this->manager->flush();

        $referer = $request->headers->get('referer');
        return $this->redirect($referer);
    }
    /**
     * @Route("/delete/{id}", name="admin_delete_proposal")
     * @param Proposal $proposal
     * @param Request $request
     * @return RedirectResponse
     */
    public function deleteProposal(Proposal $proposal,Request $request){

        $this->manager->remove($proposal);
        $this->manager->flush();
        $this->addFlash('success', 'Le service  a été bien supprimée');
       return $this->redirectToRoute('admin_index_proposals');
    }

}