<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Form\DemandeType;
use App\Repository\DemandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/demande")
 * @IsGranted("IS_AUTHENTICATED_FULLY")
 */
class DemandeController extends AbstractController
{
    private $categories_yes;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->categories_yes = $manager->getRepository('App\Entity\Category')->findBy(array('featured' => true));

    }

    /**
     * @Route("/", name="demande_index", methods={"GET"})
     * @param DemandeRepository $demandeRepository
     * @return Response
     */
    public function index(DemandeRepository $demandeRepository): Response
    {

        $demandesActives = $demandeRepository->findBy(array('statusId' => Demande::REQUEST_STATUS_ACTIVE));
        $demandeEncours = $demandeRepository->findBy(array('statusId' => Demande::REQUEST_STATUS_INPROGRESS));
        $demandeSuspendues = $demandeRepository->findBy(array('statusId' => Demande::REQUEST_STATUS_INACTIVE));
        $demandeAnnulees = $demandeRepository->findBy(array('statusId' => Demande::REQUEST_STATUS_CANCELLED));



        return $this->render('demande/index.html.twig', [
            'categories_yes' => $this->categories_yes,
            'demandesActives' => $demandesActives,
            'demandesEncours' => $demandeEncours,
            'demandesSuspendues' => $demandeSuspendues,
            'demandesAnnulees' => $demandeAnnulees

        ]);
    }

    /**
     * @Route("/new", name="demande_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $demande = new Demande();
        $form = $this->createForm(DemandeType::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($demande);
            $entityManager->flush();

            return $this->redirectToRoute('demande_index');
        }
        return $this->render('demande/new.html.twig', [
            'demande' => $demande,
            'form' => $form->createView(),
            'categories_yes' => $this->categories_yes,

        ]);
    }
//
//    /**
//     * @Route("/{id}", name="demande_show", methods={"GET"})
//     * @param Demande $demande
//     * @return Response
//     */
//    public function show(Demande $demande): Response
//    {
//        return $this->render('demande/show.html.twig', [
//            'demande' => $demande,
//            'categories_yes' => $this->categories_yes,
//
//        ]);
//    }

    /**
     * @Route("/{id}/edit", name="demande_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Demande $demande
     * @return Response
     */
    public function edit(Request $request, Demande $demande): Response
    {
        $form = $this->createForm(DemandeType::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('demande_index');
        }

        return $this->render('demande/edit.html.twig', [
            'demande' => $demande,
            'form' => $form->createView(),
            'categories_yes' => $this->categories_yes,

        ]);
    }

    /**
     * @Route("/{id}", name="demande_delete")
     * @param Demande $demande
     * @return Response
     */
    public function delete(Demande $demande): Response
    {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($demande);
            $entityManager->flush();

        return $this->redirectToRoute('demande_index');
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
}
