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
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/proposals")
 * @IsGranted("IS_AUTHENTICATED_FULLY")
 */
class ProposalsController extends AbstractController
{
    private $categories_yes;
    private $session;


    public function __construct(EntityManagerInterface $manager, SessionInterface $session)
    {
        $this->categories_yes = $manager->getRepository(Category::class)->findBy(array('featured' => true));
        $this->session = $session;
        $this->userRepo = $manager->getRepository(User::class);
    }
    /**
     * @Route("/", name="my_proposals")
     */
//    public function index()
//    {
//        return $this->render('proposals/index.html.twig', [
//            'categories_yes' => $this->categories_yes
//        ]);
//    }

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

    /**
     * @Route("/create", name="create_proposal")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @param FileUploader $fileUploader
     * @return Response
     */
    public function create(Request $request, EntityManagerInterface $manager, FileUploader $fileUploader)
    {

        $proposal = new Proposal();
        $form = $this->createForm(ProposalType::class, $proposal);
        $form->handleRequest($request);
        // Check is valid
        if ($form->isSubmitted() && $form->isValid()) {

            $proposal->setSeller($this->getUser());
            $proposal->setFeatured(false);
            $proposal->setRating(0.0);
            $medias = $manager->getRepository('App\Entity\ProposalImage')->findBy(array('proposal' => null));

            foreach ($medias as $media)
            {
                $media->setProposal($proposal);
                $proposal->addProposalImage($media);
                $roleSeller = new Role();

                $roleSeller->setTitle(Role::ROLE_SELLER);
                $this->getUser()->addUserRole($roleSeller);

                $manager->persist($media);
                $manager->persist($roleSeller);
                $manager->flush();
            }

            $this->addFlash('success', 'Congratulations! Your proposal is created');
            return $this->redirectToRoute('homepage');
        }

        return $this->render('proposals/create.html.twig', [
            'form' => $form->createView(),
            'categories_yes' => $this->categories_yes,
        ]);
    }

    /**
     * @Route("/featured", name="featured_proposals")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function featured_proposals(EntityManagerInterface $manager) :Response
    {

        $featuredProposals = $manager->getRepository(Proposal::class)->findBy(array('featured' => true));
        $delivery_times = $manager->getRepository(DeliveryTime::class)->findAll();
        $levels = $manager->getRepository(Level::class)->findAll();
        $languages = $manager->getRepository(LanguageName::class)->findAll();
//        $qb = $manager->createQueryBuilder();
//        $qb = $manager->createQueryBuilder();
//        $seller_laganges = $qb->add('select', 'p')
//            ->add('from', 'App\Entity\Level l')
//            ->join('App\Entity\Level l')
//            ->add('where', 'p.seller = :seller')
//            ->setParameter('seller', $this->getUser())
//            ->andWhere('p.featured = true')
//            ->getQuery()
//            ->getResult();
        return $this->render('proposals/featured_proposals.html.twig', [
            'featuredProposals' => $featuredProposals,
            'categories_yes'    => $this->categories_yes,
            'delivery_times'    => $delivery_times,
            'levels'            => $levels,
            'languages'          => $languages
        ]);
    }

    /**
     * @Route("/top-proposals", name="top_proposals")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function top_proposals(EntityManagerInterface $manager) :Response
    {

        $topProposals = $manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::REQUEST_STATUS_ACTIVE,'seller'=>$this->getUser()->getId(), 'level'=> 3));

        $delivery_times = $manager->getRepository(DeliveryTime::class)->findAll();
        $levels = $manager->getRepository(Level::class)->findAll();
        $languages = $manager->getRepository(LanguageName::class)->findAll();
//        $qb = $manager->createQueryBuilder();
//        $qb = $manager->createQueryBuilder();
//        $seller_laganges = $qb->add('select', 'p')
//            ->add('from', 'App\Entity\Level l')
//            ->join('App\Entity\Level l')
//            ->add('where', 'p.seller = :seller')
//            ->setParameter('seller', $this->getUser())
//            ->andWhere('p.featured = true')
//            ->getQuery()
//            ->getResult();
        return $this->render('proposals/top_proposals.html.twig', [
            'topProposals' => $topProposals,
            'categories_yes'    => $this->categories_yes,
            'delivery_times'    => $delivery_times,
            'levels'            => $levels,
            'languages'          => $languages
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

        $repo = $manager->getRepository(Proposal::class);
        $status = Proposal::REQUEST_STATUS_ACTIVE;
        $quantity = 8; // We only want 5 rows (however think in increase this value if you have previously removed rows on the table)
        $totalRowsTable = $repo->createQueryBuilder('p')->select('count(p.id)')
            ->add('where', 'p.seller = :seller')
            ->setParameter('seller', $this->getUser())
            ->andwhere('p.statusId ='.$status)->getQuery()->getSingleScalarResult();
        // This will be in this case 10 because i have 10 records on this table
        $random_ids = $this->UniqueRandomNumbersWithinRange(1,$totalRowsTable,$quantity);
        $randomProposals = $repo->createQueryBuilder('a')
            ->where('a.id IN (:ids)') // if is another field, change it
            ->setParameter('ids', $random_ids)
            ->setMaxResults(8)// Add this line if you want to give a limit to the records (if all the ids exists then you would like to give a limit)
            ->getQuery()
            ->getResult();
        $delivery_times = $manager->getRepository(DeliveryTime::class)->findAll();
        $levels = $manager->getRepository(Level::class)->findAll();
        $languages = $manager->getRepository(LanguageName::class)->findAll();

        return $this->render('proposals/random_proposals.html.twig', [
            'randomProposals' => $randomProposals,
            'categories_yes'    => $this->categories_yes,
            'delivery_times'    => $delivery_times,
            'levels'            => $levels,
            'languages'          => $languages
        ]);
    }


    /**
     * @Route("/", name="proposal_index", methods={"GET"})
     * @param ProposalRepository $proposalRepository
     * @return Response
     */
    public function index(ProposalRepository $proposalRepository): Response
    {

        $proposalsActives = $proposalRepository->findBy(array('statusId' => Proposal::REQUEST_STATUS_ACTIVE,'seller'=>$this->getUser()->getId()));
        $proposalsEncours = $proposalRepository->findBy(array('statusId' => Proposal::REQUEST_STATUS_INPROGRESS,'seller'=>$this->getUser()->getId()));
        $proposalsSuspendues = $proposalRepository->findBy(array('statusId' => Proposal::REQUEST_STATUS_INACTIVE,'seller'=>$this->getUser()->getId()));
        $proposalsAnnulees = $proposalRepository->findBy(array('statusId' => Proposal::REQUEST_STATUS_CANCELLED,'seller'=>$this->getUser()->getId()));



        return $this->render('proposals/index.html.twig', [
            'categories_yes' => $this->categories_yes,
            'proposalsActives' => $proposalsActives,
            'proposalsEncours' => $proposalsEncours,
            'proposalsSuspendues' => $proposalsSuspendues,
            'proposalsAnnulees' => $proposalsAnnulees

        ]);
    }
}
