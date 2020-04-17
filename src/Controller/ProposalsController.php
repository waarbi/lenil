<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Proposal;
use App\Entity\ProposalImage;
use App\Entity\User;
use App\Form\ProposalType;
use App\Services\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
     * Returns a JSON string with the sousCategory of the Category with the providen id.
     *@Route("/get/souscategory", name="get_sous_category_by_category")
     * @param Request $request
     * @return JsonResponse
     */
    public function sousCategoryOfCategory(Request $request)
    {
        // Get Entity manager and repository
        $em = $this->getDoctrine()->getManager();
        $repoSousCategory = $em->getRepository("App\Entity\SousCategory");

        // Search the neighborhoods that belongs to the city with the given id as GET parameter "cityid"
        $sousCategories = $repoSousCategory->createQueryBuilder("q")
            ->where("q.category = :catid")
            ->setParameter("catid", $request->query->get("catid"))
            ->getQuery()
            ->getResult();

        $responseArray = array();
        foreach($sousCategories as $sousCategory){
            $responseArray[] = array(
                "id" => $sousCategory->getId(),
                "title" => $sousCategory->getTitle()
            );
        }

        // Return array with structure of the neighborhoods of the providen city id
        return new JsonResponse($responseArray);

        // e.g
        // [{"id":"3","name":"Treasure Island"},{"id":"4","name":"Presidio of San Francisco"}]
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

            $files= $request->files->get("file");

            $proposal->setSeller($this->getUser());
            $manager->persist($proposal);
            $manager->flush();

            $media = new ProposalImage();

            foreach ($files as $file)
            {
                $adFileName = $fileUploader->upload($file);
                $media->setFileName($adFileName);
                $media->setProposal($proposal);
                $manager->persist($media);
                $manager->flush();
            }
            $this->addFlash('success', 'Congratulations! Your proposal is created');

            return $this->redirectToRoute('admin_entries');
        }

        return $this->render('proposals/create.html.twig', [
            'form' => $form->createView(),
            'categories_yes' => $this->categories_yes,
        ]);
    }

}
