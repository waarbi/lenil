<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Proposal;
use App\Entity\ProposalImage;
use App\Entity\Role;
use App\Entity\User;
use App\Form\ProposalType;
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
    public function index()
    {
        return $this->render('proposals/index.html.twig', [
            'categories_yes' => $this->categories_yes
        ]);
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
     * @Route("/proposals/featuted", name="featured_proposals")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function featured_proposals(EntityManagerInterface $manager) :Response
    {

        $featured_proposals = $manager->getRepository(Proposal::class)->findBy(array('featured' => true));
        $delivery_times = $manager->getRepository(DeliveryTime::class)->findAll();
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
            'featured_proposals' => $featured_proposals,
            'categories_yes' => $this->categories_yes,
            'delivery_times' =>$delivery_times
        ]);
    }


}
