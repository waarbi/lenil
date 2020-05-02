<?php


namespace App\Controller\Admin;


use App\Entity\Admin\Article;
use App\Entity\Admin\ArticleCategory;
use App\Entity\Proposal;
use App\Form\Admin\ArticleCategoryType;
use App\Form\Admin\ArticleType;
use App\Services\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/blog")
 */
class AdminBlogController extends AbstractController
{
    private $manager;
    private $nbProposal;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->nbProposal = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_INPROGRESS));

    }

    /**
     * @Route("/articlecategory/", name="admin_index_article_category", methods={"GET","POST"})
     * @return Response
     */
    public function indexAdminArticleCategory(): Response
    {
      $articleCategories = $this->manager->getRepository(ArticleCategory::class)->findAll();

        return $this->render('admin/blog/category/index.html.twig', [
           'articleCategories' => $articleCategories,
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
        ]);
    }
    /**
     * @Route("/articlecategory/create/", name="admin_create_article_category", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function createArticleCategory(Request $request): Response
    {
        $category = new ArticleCategory();
        $form = $this->createForm(ArticleCategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->manager->persist($category);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez créé une catégorie d\'article');
            return $this->redirectToRoute('admin_index_article_category');
        }
        return $this->render('admin/blog/category/create.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),

        ]);
    }


    /**
     * @Route("/articlecategory/delete/{id}", name="admin_delete_article_category")
     * @param ArticleCategory $articleCategory
     * @return Response
     */
    public function deleteArticleCategory(ArticleCategory $articleCategory): Response
    {

        $this->manager->remove($articleCategory);
        $this->manager->flush();
        $this->addFlash('success', 'La catégorie d\'article a été bien supprimée');

        return $this->redirectToRoute('admin_index_article_category');
    }

    /**
     * @Route("/articlecategory/edit/{id}", name="admin_edit_article_category", methods={"GET","POST"})
     * @param Request $request
     * @param ArticleCategory $articleCategory
     * @return Response
     */
    public function editArticleCategory(Request $request, ArticleCategory $articleCategory ): Response
    {
        $form = $this->createForm(ArticleCategoryType::class, $articleCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $this->manager->persist($articleCategory);
            $this->manager->flush();

            $this->addFlash('success', 'Vous avez modifié la catégorie d\'article');
            return $this->redirectToRoute('admin_index_article_category');
        }
        return $this->render('admin/blog/category/create.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
            'delivery' => $articleCategory


        ]);
    }

    //Gestion des articles

    /**
     * @Route("/articles/", name="admin_index_article", methods={"GET","POST"})
     * @return Response
     */
    public function indexAdminArticle(): Response
    {
        $articles = $this->manager->getRepository(Article::class)->findAll();

        return $this->render('admin/blog/article/index.html.twig', [
            'articles' => $articles,
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/article/create/", name="admin_create_article", methods={"GET","POST"})
     * @param Request $request
     * @param FileUploader $uploader
     * @return Response
     */
    public function createArticle(Request $request, FileUploader $uploader): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $imageIcon = $form['topImage']->getData();

            if ($imageIcon) {
                $fileName = $uploader->upload($imageIcon);
                $article->setTopImage($fileName);
            }

            $this->manager->persist($article);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez créé un article');
            return $this->redirectToRoute('admin_index_article');
        }
        return $this->render('admin/blog/article/create.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),

        ]);
    }

    /**
     * @Route("/article/delete/{id}", name="admin_delete_article")
     * @param Article $article
     * @param FileUploader $fileUploader
     * @return Response
     */
    public function deleteArticle(Article $article, FileUploader $fileUploader): Response
    {

        if ($article->getTopImage()) $fileUploader->deleteFile($article->getTopImage());
        $this->manager->remove($article);
        $this->manager->flush();
        $this->addFlash('success', 'L\'article a été bien supprimé');

        return $this->redirectToRoute('admin_index_article');
    }

    /**
     * @Route("/article/edit/{id}", name="admin_edit_article", methods={"GET","POST"})
     * @param Request $request
     * @param Article $article
     * @param FileUploader $uploader
     * @return Response
     */
    public function editArticle(Request $request, Article $article, FileUploader $uploader): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        $oldImage = $article->getTopImage();

        if ($form->isSubmitted() && $form->isValid()) {

            $imageIcon = $form['topImage']->getData();
            if ($imageIcon) {
                if ($oldImage) $uploader->deleteFile($article->getTopImage());
                $fileName = $uploader->upload($imageIcon);
                $article->setTopImage($fileName);
            }else{
                $article->setTopImage($oldImage);
            }
            $this->manager->persist($article);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez modifié un article');
            return $this->redirectToRoute('admin_index_article');
        }
        return $this->render('admin/blog/article/edit.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
            'article' => $article

        ]);
    }
}