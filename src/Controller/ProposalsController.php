<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Proposal;
use App\Entity\ProposalImage;
use App\Entity\SousCategory;
use App\Entity\User;
use App\Form\ProposalType;
use App\Services\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ProposalsController extends AbstractController
{
    private $categories_yes;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->categories_yes = $manager->getRepository(Category::class)->findBy(array('featured' => true));
        $this->userRepo = $manager->getRepository(User::class);
    }
    /**
     * @Route("/proposals", name="my_proposals")
     */
    public function index()
    {
        return $this->render('proposals/index.html.twig', [
            'categories_yes' => $this->categories_yes
        ]);
    }

    /**
     * @Route("/subcategory", name="get_sub_category")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function getSubCategory(Request $request, EntityManagerInterface $manager)
    {
        $category_id = $request->request->get("category_id");

        $categorie = $manager->getRepository(SousCategory::class)->findByCategory($category_id);

            dd($categorie);
//        $serializer = new Serializer(new JsonEncoder());
//        $json = $serializer->serialize($categorie , 'json');

       // $companyCopy = $serializer->deserialize($json, Company::class, 'json');
        return new JsonResponse($json  );


    }

    /**
     * @Route("/proposals/create", name="create_proposal")
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
            $files = $request->request->get("files");
            $proposal->setSeller($this->getUser());
            $manager->persist($proposal);
            $manager->flush();

            $media = new ProposalImage();

            foreach ($files as $file)
            {
//                $filename = md5(uniqid()).'.'.$file->guessExtension();
//                $file->move($this->getParameter('uploads'), $filename);
                $adFileName = $fileUploader->upload($file);
                $media->setFileName($adFileName); // Same entity, that is being updated
                $media->setPath("testetststs");
                $media->setProposal($proposal);
                $manager->persist($media);
                $manager->flush();
            }
            $this->addFlash('success', 'Congratulations! Your post is created');

            return $this->redirectToRoute('admin_entries');
        }

        return $this->render('proposals/create.html.twig', [
            'proposalForm' => $form->createView(),
            'categories_yes' => $this->categories_yes,
        ]);
    }
}
