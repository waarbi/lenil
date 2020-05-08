<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\DeliveryTime;
use App\Entity\LanguageName;
use App\Entity\Level;
use App\Entity\Proposal;
use App\Entity\ProposalImage;
use App\Entity\Role;
use App\Entity\User;
use App\Form\ProposalType;
use App\Repository\ProposalRepository;
use App\Services\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

/**
 * @Route("/proposals")
 * @Security("is_granted('ROLE_USER')", message="vous n'avez pas le droit d'acceder a cette ressource")

 */
class ProposalsController extends AbstractController
{
    private $categories_yes;
    private $session;
    private $manager;
    private $eventDispatcher;


    public function __construct(EntityManagerInterface $manager, EventDispatcherInterface $eventDispatcher,SessionInterface $session)
    {
        $this->categories_yes = $manager->getRepository(Category::class)->findBy(array('featured' => true));
        $this->session = $session;
        $this->manager = $manager;
        $this->eventDispatcher = $eventDispatcher;

    }


    /**
     * @Route("/uploadproposalimagehandler", name="uploadproposalimagehandler")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @param FileUploader $fileUploader
     * @return JsonResponse
     */
    public function uploadProposalImageHandler(Request $request, EntityManagerInterface $manager, FileUploader $fileUploader) {
        $output = array('uploaded' => false);
        // get the file from the request object
        $file = $request->files->get('file');
        $adFileName = null;
        if ($file){
            $adFileName = $fileUploader->upload($file);
        }
        if (!is_null($adFileName)) {

            $media = new ProposalImage();
            $media->setFileName($adFileName);
            $manager->persist($media);
            $manager->flush();
            $output['uploaded'] = true;
            $output['fileName'] = $adFileName;
        };

        return new JsonResponse($output);
    }

//    /**
//     * @Route("/create", name="create_proposal", methods={"GET","POST"})
//     * @param Request $request
//     * @Security("is_granted('ROLE_USER')")
//     * @Security("is_granted('ROLE_SELLER')")
//     * @param EntityManagerInterface $manager
//     * @return Response
//     */
//    public function create(Request $request, EntityManagerInterface $manager)
//    {
//
//        $proposal = new Proposal();
//        $form = $this->createForm(ProposalType::class, $proposal);
//        $form->handleRequest($request);
//        // Check is valid
//        if ($form->isSubmitted() && $form->isValid()) {
//
//            $proposal->setSeller($this->getUser());
//            $medias = $manager->getRepository('App\Entity\ProposalImage')->findBy(array('proposal' => null));
//
//            foreach ($medias as $media)
//            {
//                $media->setProposal($proposal);
//                $proposal->addProposalImage($media);
//                $manager->persist($media);
//
//            }
//            $roleSeller = new Role();
//            $roleSeller->setTitle(Role::ROLE_SELLER);
//            $this->getUser()->addUserRole($roleSeller);
//
//            $manager->persist($roleSeller);
//            $manager->flush();
//            $this->addFlash('success', 'Congratulations! Your proposal is created');
//
//            return $this->redirectToRoute('account_index');
//        }
//
//        return $this->render('proposals/create.html.twig', [
//            'form' => $form->createView(),
//            'categories_yes' => $this->categories_yes,
//        ]);
//    }

    /**
     * @Route("/new/proposal", name="create_new_proposal")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function createProposal(Request $request){

        $proposal = new Proposal();
        $form = $this->createForm(ProposalType::class, $proposal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $proposal->setSeller($this->getUser());
            $medias = $this->manager->getRepository('App\Entity\ProposalImage')->findBy(array('proposal' => null));

            foreach ($medias as $media)
            {
                $media->setProposal($proposal);
                $proposal->addProposalImage($media);
                $this->manager->persist($media);
            }

            $roleSeller = new Role();
            $roleSeller->setTitle(Role::ROLE_SELLER);
            $this->getUser()->addUserRole($roleSeller);

            $this->manager->persist($roleSeller);
            $this->manager->persist($proposal);
            $this->manager->flush();

            $this->addFlash('success', 'Votre service a été créé et soumis pour validation');
            return $this->redirectToRoute('account_index');

        }
        return $this->render('proposals/new-proposal.html.twig', [
            'form' => $form->createView(),
            'categories_yes' => $this->categories_yes,

        ]);

    }

    /**
     * @Route("/delete/{id}", name="delete_proposal")
     * @param Proposal $proposal
     * @param FileUploader $fileUploader
     * @return RedirectResponse
     */
    public function deleteProposal(Proposal $proposal,FileUploader $fileUploader){

        $images = $proposal->getProposalImages();
        if ($images){
            foreach ($images as $media)
            {
                $fileUploader->deleteFile($media->getFileName());
                $proposal->removeProposalImage($media);
                $this->manager->remove($media);

            }
        }
        $this->manager->remove($proposal);
        $this->manager->flush();
        $this->addFlash('success', 'Le service  a été bien supprimée');
        return $this->redirectToRoute('account_index');
    }

    /**
     * @Route("/show/{sellerSlug}/{proposalSlug}", name="show_details_proposal")
     * @param Request $request
     * @param $proposalSlug
     * @param $sellerSlug
     * @return Response
     */
    public function showProposal(Request $request, $proposalSlug,$sellerSlug ){
        $proposal = $this->manager->getRepository(Proposal::class)->findBy(array('slug' => $proposalSlug))[0];

        return  $this->render('proposals/show-proposal.html.twig',array(
            'proposal' => $proposal,
            'categories_yes' => $this->categories_yes,

        ));
    }


    /**
     * @Route("/edit/{id}", name="edit_proposal", methods={"GET","POST"})
     * @param Proposal $proposal
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function edit(Proposal $proposal, Request $request, EntityManagerInterface $manager, FileUploader $fileUploader):Response
    {
        $form = $this->createForm(ProposalType::class, $proposal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $proposal->setSeller($this->getUser());
            $medias = $this->manager->getRepository('App\Entity\ProposalImage')->findBy(array('proposal' => null));
            if ($medias){
                foreach ($medias as $media)
                {
                    $media->setProposal($proposal);
                    $proposal->addProposalImage($media);
                    $this->manager->persist($media);
                }

            }


            $manager->flush();
            $this->addFlash('success', 'Le service a été bien modifiée');
            return $this->redirectToRoute('account_index');
        }

        return $this->render('proposals/edit_proposal.html.twig', [
            'proposal' => $proposal,
            'form' => $form->createView(),
            'categories_yes' => $this->categories_yes,
        ]);
    }

    /**
     * @Route("/load/proposal/images", name="load_proposal_image")
     * @param Request $request
     * @param FileUploader $fileUploader
     * @return JsonResponse
     */
    public function loadImagesProposal(Request $request,FileUploader $fileUploader){
        $idProposal = $request->get('idProposal');
        $proposal = $this->manager->getRepository(Proposal::class)->find($idProposal);
        $results = array();
        if ($proposal){
            $images = $proposal->getProposalImages();
            if ($images){
                foreach ($images as $media)
                {
                    $obj['name'] = $media->getFileName();
                    $obj['size'] = filesize($fileUploader->getTargetDirectory().'/'.$media->getFileName());
                    $results [] = $obj;
                }
            }
        }
        return new JsonResponse($results);
    }
    /**
     * @Route("/remove/proposal/images", name="remove_proposal_image", methods={"POST"})
     * @param Request $request
     * @param FileUploader $fileUploader
     * @return JsonResponse
     */
    public function removeImagesProposal(Request $request,FileUploader $fileUploader){
        $filename = $request->get('name');
        $Imageproposal = $this->manager->getRepository(ProposalImage::class)->findBy(array('file_name' => $filename));
        $results = array();
        if ($Imageproposal){
                foreach ($Imageproposal as $media)
                {
                   $fileUploader->deleteFile($media->getFileName());
                   $this->manager->remove($media);
                }
                $this->manager->flush();
        }
        return new JsonResponse($results);
    }
    /**
     * @Route("/featured", name="featured_proposals")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function featured_proposals(EntityManagerInterface $manager) :Response
    {
        $status = Proposal::PROPOSAL_STATUS_ACTIVE;
        $featuredProposals = $manager->getRepository(Proposal::class)->getFeaturedProposals($status);

        $deliveyTimes  = array();
            $categories  = array();
            $sellers = array();
            $levelsUsers = array();

            foreach ($featuredProposals as $proposal){
                /**@var Proposal $proposal  */
                $deliveyTimes [] = $proposal->getDeliveryTime();
                $categories [] = $proposal->getCategory();
                $sellers [] = $proposal->getSeller();
            }

            foreach (array_unique($sellers) as $user){
                /**@var User $user */
                $levelsUsers [] = $user->getLevel();
            }

        return $this->render('proposals/featured_proposals.html.twig', array(
            'featuredProposals' => $featuredProposals,
            'filterCategories' => array_unique($categories),
            'filterDeliveryTimes' =>array_unique($deliveyTimes),
            'filterLevels' => array_unique($levelsUsers),
            'categories_yes' =>  $this->categories_yes,
        ));

    }

    /**
     * @Route("/top-proposals", name="top_proposals")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function top_proposals(EntityManagerInterface $manager) :Response
    {

        $status = Proposal::PROPOSAL_STATUS_ACTIVE;
        $topProposals = $manager->getRepository(Proposal::class)->getTopProposals($status);

        $deliveyTimes  = array();
        $categories  = array();
        $sellers = array();
        $levelsUsers = array();

        foreach ($topProposals as $proposal){
            /**@var Proposal $proposal  */
            $deliveyTimes [] = $proposal->getDeliveryTime();
            $categories [] = $proposal->getCategory();
            $sellers [] = $proposal->getSeller();
        }

        foreach (array_unique($sellers) as $user){
            /**@var User $user */
            $levelsUsers [] = $user->getLevel();
        }


        return $this->render('proposals/top_proposals.html.twig', [
            'topProposals' => $topProposals,
            'filterCategories' => array_unique($categories),
            'filterDeliveryTimes' =>array_unique($deliveyTimes),
            'filterLevels' => array_unique($levelsUsers),
            'categories_yes' =>  $this->categories_yes,
        ]);
    }

    function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }
    /**
     * @Route("/random-proposals", name="random_proposals")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function random_proposals(EntityManagerInterface $manager) :Response
    {

        $randomProposals = $manager->getRepository(Proposal::class)->getRandomProposals();

        $deliveyTimes  = array();
        $categories  = array();
        $sellers = array();
        $levelsUsers = array();

        foreach ($randomProposals as $proposal){
            /**@var Proposal $proposal  */
            $deliveyTimes [] = $proposal->getDeliveryTime();
            $categories [] = $proposal->getCategory();
            $sellers [] = $proposal->getSeller();
        }

        foreach (array_unique($sellers) as $user){
            /**@var User $user */
            $levelsUsers [] = $user->getLevel();
        }



        return $this->render('proposals/random_proposals.html.twig', [
            'randomProposals' => $randomProposals,
            'filterCategories' => array_unique($categories),
            'filterDeliveryTimes' =>array_unique($deliveyTimes),
            'filterLevels' => array_unique($levelsUsers),
            'categories_yes' =>  $this->categories_yes,
        ]);
    }


    /**
     * @Route("/", name="proposal_index", methods={"GET"})
     * @param ProposalRepository $proposalRepository
     * @return Response
     */
    public function index(ProposalRepository $proposalRepository): Response
    {

        $proposalsActives = $proposalRepository->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_ACTIVE,'seller'=>$this->getUser()->getId()));
        $proposalsEncours = $proposalRepository->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_INPROGRESS,'seller'=>$this->getUser()->getId()));
        $proposalsSuspendues = $proposalRepository->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_PAUSE,'seller'=>$this->getUser()->getId()));
        $proposalsAnnulees = $proposalRepository->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_TRUSH,'seller'=>$this->getUser()->getId()));
        $proposalsAmodifier = $proposalRepository->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_MODIFICATION_REQUIRED,'seller'=>$this->getUser()->getId()));
        $proposalsDeclined = $proposalRepository->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_DECLINED,'seller'=>$this->getUser()->getId()));

        return $this->render('proposals/index.html.twig', [
            'categories_yes'         => $this->categories_yes,
            'proposalsActives'       => $proposalsActives,
            'proposalsEncours'       => $proposalsEncours,
            'proposalsSuspendues'    => $proposalsSuspendues,
            'proposalsAnnulees'      => $proposalsAnnulees,
            'proposalsAmodifier'     => $proposalsAmodifier,
            'proposalsDeclined'      => $proposalsDeclined,
        ]);
    }

    /**
     * @Route("/load/featured-proposal/search", name="load_search_featured_proposals")
     * @param EntityManagerInterface $manager
     * @param Request $request
     * @return JsonResponse
     */
    public function loadSearchFeaturedProposal(EntityManagerInterface $manager, Request $request)
    {

        $onlineFilter = json_decode($request->get('json_online_seller'));
        $categoriesFilter = json_decode($request->get('json_categories'));
        $deliveryFilter = json_decode($request->get('json_delivery'));
        $levelFilter = json_decode($request->get('json_level_seller'));
        $status = Proposal::PROPOSAL_STATUS_ACTIVE;

        $proposals = $manager->getRepository(Proposal::class)->loadSearchFeaturedProposal($onlineFilter,$categoriesFilter,$deliveryFilter,$levelFilter, $status);

        $results = array(
            "count_proposals" => 0,
            "proposals" => array(),
        );
        $proposalsArrayResult = array();
        foreach($proposals as $proposal){
            /**@var Proposal $proposal */
            $proposalsArrayResult [] = array(
                "proposalFirstImage" => $proposal->getProposalImages()[0]->getFileName(),
                "sellerAvatar" => $proposal->getSeller()->getPicture(),
                "sellerName" => $proposal->getSeller()->getFullName(),
                "sellerLevel" => $proposal->getSeller()->getLevel()->getName(),
                "proposalTitle" => $proposal->getTitle(),
                "proposalRating" => $proposal->getRating()? $proposal->getRating():'',
                "proposalViews" => $proposal->getViews() ? $proposal->getViews():'',
                "proposalPrice" => $proposal->getPrice(),
                "proposalUrl" => '/proposals/show/'.$proposal->getSeller()->getSlug().'/'.$proposal->getSlug(),
            );
        }
        $results = array(
            "count_proposals" => count($proposalsArrayResult),
            "proposals" => $proposalsArrayResult,
        );
        return new JsonResponse($results);
    }

    /**
     * @Route("/load/top-proposal/search", name="load_search_top_proposals")
     * @param EntityManagerInterface $manager
     * @param Request $request
     * @return JsonResponse
     */
    public function loadSearchTopProposal(EntityManagerInterface $manager, Request $request)
    {

        $onlineFilter = json_decode($request->get('json_online_seller'));
        $categoriesFilter = json_decode($request->get('json_categories'));
        $deliveryFilter = json_decode($request->get('json_delivery'));
        $levelFilter = json_decode($request->get('json_level_seller'));
        $status = Proposal::PROPOSAL_STATUS_ACTIVE;

        $proposals = $manager->getRepository(Proposal::class)->loadSearchTopProposal($onlineFilter,$categoriesFilter,$deliveryFilter,$levelFilter, $status);

        $results = array(
            "count_proposals" => 0,
            "proposals" => array(),
        );
        $proposalsArrayResult = array();
        foreach($proposals as $proposal){
            /**@var Proposal $proposal */
            $proposalsArrayResult [] = array(
                "proposalFirstImage" => $proposal->getProposalImages()[0]->getFileName(),
                "sellerAvatar" => $proposal->getSeller()->getPicture(),
                "sellerName" => $proposal->getSeller()->getFullName(),
                "sellerLevel" => $proposal->getSeller()->getLevel()->getName(),
                "proposalTitle" => $proposal->getTitle(),
                "proposalRating" => $proposal->getRating()? $proposal->getRating():'',
                "proposalViews" => $proposal->getViews() ? $proposal->getViews():'',
                "proposalPrice" => $proposal->getPrice(),
                "proposalUrl" => '/proposals/show/'.$proposal->getSeller()->getSlug().'/'.$proposal->getSlug(),
            );
        }
        $results = array(
            "count_proposals" => count($proposalsArrayResult),
            "proposals" => $proposalsArrayResult,
        );
        return new JsonResponse($results);
    }

    /**
     * @Route("/load/random-proposal/search", name="load_search_random_proposals")
     * @param EntityManagerInterface $manager
     * @param Request $request
     * @return JsonResponse
     */
    public function loadSearchRandomProposal(EntityManagerInterface $manager, Request $request)
    {

        $onlineFilter = json_decode($request->get('json_online_seller'));
        $categoriesFilter = json_decode($request->get('json_categories'));
        $deliveryFilter = json_decode($request->get('json_delivery'));
        $levelFilter = json_decode($request->get('json_level_seller'));
        $status = Proposal::PROPOSAL_STATUS_ACTIVE;

        $proposals = $manager->getRepository(Proposal::class)->loadSearchRandomProposal($onlineFilter,$categoriesFilter,$deliveryFilter,$levelFilter, $status);

        $results = array(
            "count_proposals" => 0,
            "proposals" => array(),
        );
        $proposalsArrayResult = array();
        foreach($proposals as $proposal){
            /**@var Proposal $proposal */
            $proposalsArrayResult [] = array(
                "proposalFirstImage" => $proposal->getProposalImages()[0]->getFileName(),
                "sellerAvatar" => $proposal->getSeller()->getPicture(),
                "sellerName" => $proposal->getSeller()->getFullName(),
                "sellerLevel" => $proposal->getSeller()->getLevel()->getName(),
                "proposalTitle" => $proposal->getTitle(),
                "proposalRating" => $proposal->getRating()? $proposal->getRating():'',
                "proposalViews" => $proposal->getViews() ? $proposal->getViews():'',
                "proposalPrice" => $proposal->getPrice(),
                "proposalUrl" => '/proposals/show/'.$proposal->getSeller()->getSlug().'/'.$proposal->getSlug(),
            );
        }
        $results = array(
            "count_proposals" => count($proposalsArrayResult),
            "proposals" => $proposalsArrayResult,
        );
        return new JsonResponse($results);
    }


    /**
     * @Route("/desactiver/{id}", name="disable_proposal")
     * @param Proposal $proposal
     * @return Response
     */
    public function disableService(Proposal $proposal): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $proposal->setStatusId(Proposal::PROPOSAL_STATUS_PAUSE);
        $entityManager->persist($proposal);
        $entityManager->flush();
        $this->addFlash('success', 'Le service a été bien suspendue');

        return $this->redirectToRoute('proposal_index');
    }

    /**
     * @Route("/activer/{id}", name="enable_proposal")
     * @param Proposal $proposal
     * @return Response
     */
    public function enableService(Proposal $proposal): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $proposal->setStatusId(Proposal::PROPOSAL_STATUS_ACTIVE);
        $entityManager->persist($proposal);
        $entityManager->flush();
        $this->addFlash('success', 'Le service a été bien activé');

        return $this->redirectToRoute('proposal_index');
    }

    /**
     * @Route("/make/featured/{id}", name="make_featured_proposal")
     * @param Proposal $proposal
     * @return Response
     */
    public function makeServiceFeatured(Proposal $proposal): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $proposal->setFeatured(true);
        $entityManager->persist($proposal);
        $entityManager->flush();
        $this->addFlash('success', 'Le service a été bien mis en vedette');

        return $this->redirectToRoute('proposal_index');
    }
}
