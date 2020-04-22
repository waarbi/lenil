<?php


namespace App\Controller\Admin;


use App\Entity\Category;
use App\Entity\Proposal;
use App\Form\Admin\CategoryType;
use App\Services\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/categories")
 */
class AdminCategoryController extends AbstractController
{
    private $manager;
    private $nbProposal;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->nbProposal = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::REQUEST_STATUS_INPROGRESS));

    }

    /**
     * @Route("/index/", name="admin_index_category", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function indexAdminCategory(Request $request): Response
    {
      $categories = $this->manager->getRepository(Category::class)->findAll();

        return $this->render('admin/category/index.html.twig', [
           'categories' => $categories,
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/create/", name="admin_create_category", methods={"GET","POST"})
     * @param Request $request
     * @param FileUploader $uploader
     * @return Response
     * @throws \Exception
     */
    public function create(Request $request, FileUploader $uploader): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $imageIcon = $form['image']->getData();

            if ($imageIcon) {
                $fileName = $uploader->uploadCategoryImageCard($imageIcon);
                $category->setImage($fileName);
            }
            $imageCard = $form['cardPicture']->getData();
            if ($imageCard) {
                $adFileName = $uploader->uploadCategoryImageCard($imageCard);
                $category->setCardPicture($adFileName);
            }
            $this->manager->persist($category);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez créé une catégorie');
            return $this->redirectToRoute('admin_index_category');
        }
        return $this->render('admin/category/create.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),

        ]);
    }

    /**
     * @Route("/category/delete/{id}", name="admin_delete_category")
     * @param Category $category
     * @param FileUploader $fileUploader
     * @return Response
     */
    public function deleteCategory(Category $category, FileUploader $fileUploader): Response
    {

        if ($category->getImage()) $fileUploader->deleteCategoryImageCard($category->getImage());
        if ($category->getCardPicture()) $fileUploader->deleteCategoryImageCard($category->getCardPicture());
        $this->manager->remove($category);
        $this->manager->flush();
        $this->addFlash('success', 'La Catégorie a été bien supprimée');

        return $this->redirectToRoute('admin_index_category');
    }

    /**
     * @Route("/category/edit/{id}", name="admin_edit_category", methods={"GET","POST"})
     * @param Request $request
     * @param Category $category
     * @param FileUploader $uploader
     * @return Response
     * @throws \Exception
     */
    public function editCategories(Request $request, Category $category, FileUploader $uploader): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        $imageOld = $category->getImage();
        $imageCardOld = $category->getCardPicture();
        if ($form->isSubmitted()) {

            $imageIcon = $form['image']->getData();

            if ($imageIcon) {
                $uploader->deleteCategoryImageCard($imageOld);
                $fileName = $uploader->uploadCategoryImageCard($imageIcon);
                $category->setImage($fileName);
            }else{
                $category->setImage($imageOld);
            }
            $imageCard = $form['cardPicture']->getData();

            if ($imageCard) {
                $uploader->deleteCategoryImageCard($imageCardOld);
                $adFileName = $uploader->uploadCategoryImageCard($imageCard);
                $category->setCardPicture($adFileName);
            }else{
                $category->setCardPicture($imageCardOld);
            }
            $this->manager->persist($category);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez modifié la catégorie');
            return $this->redirectToRoute('admin_index_category');
        }
        return $this->render('admin/category/edit.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
            'category' => $category


        ]);
    }
}