<?php


namespace App\Controller\Admin;


use App\Entity\Proposal;
use App\Entity\SousCategory;
use App\Form\Admin\SousCategoryType;
use App\Services\PaginationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/Subcategories")
 */
class AdminSubCategoryController extends AbstractController
{
    private $manager;
    private $nbProposal;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->nbProposal = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_INPROGRESS));

    }

    /**
     * @Route("/index/page/{page<\d+>?1}", name="admin_index_sub_category", methods={"GET","POST"})
     * @param $page
     * @param PaginationService $paginationService
     * @return Response
     */
    public function indexAdminSubCategory($page,PaginationService $paginationService): Response
    {
        $paginationService->setEntityClass(SousCategory::class)->setPage($page);
        return $this->render('admin/subcategory/index.html.twig', [
            'pagination' => $paginationService,
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/create/", name="admin_create_sub_category", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function create(Request $request): Response
    {
        $subCategory = new SousCategory();
        $form = $this->createForm(SousCategoryType::class, $subCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->manager->persist($subCategory);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez créé une sous catégorie');
            return $this->redirectToRoute('admin_index_sub_category');
        }
        return $this->render('admin/subcategory/create.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),

        ]);
    }

    /**
     * @Route("/SubCategory/delete/{id}", name="admin_delete_sub_category")
     * @param SousCategory $sousCategory
     * @return Response
     */
    public function deleteSubCategory(SousCategory $sousCategory): Response
    {

        $this->manager->remove($sousCategory);
        $this->manager->flush();
        $this->addFlash('success', 'La Sous Catégorie a été bien supprimée');

        return $this->redirectToRoute('admin_index_sub_category');
    }

    /**
     * @Route("/SubCategory/edit/{id}", name="admin_edit_sub_category", methods={"GET","POST"})
     * @param Request $request
     * @param SousCategory $sousCategory
     * @return Response
     */
    public function editSubCategory(Request $request, SousCategory $sousCategory): Response
    {
        $form = $this->createForm(SousCategoryType::class, $sousCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $this->manager->persist($sousCategory);
            $this->manager->flush();

            $this->addFlash('success', 'Vous avez modifié la sous catégorie');
            return $this->redirectToRoute('admin_index_sub_category');
        }
        return $this->render('admin/subcategory/edit.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
            'subCategory' => $sousCategory


        ]);
    }
}