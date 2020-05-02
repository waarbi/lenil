<?php


namespace App\Controller;


use App\Entity\Admin\Article;
use App\Entity\Admin\ArticleCategory;
use App\Entity\Admin\GeneralSetting;
use App\Entity\Admin\Term;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    private $categories_yes;
    private $manager;
    private $generalSettings;


    public function __construct(EntityManagerInterface $manage)
    {
        $this->categories_yes = $manage->getRepository('App\Entity\Category')->findBy(array('featured' => true));
        $this->manager = $manage;
        $this->generalSettings = $manage->getRepository(GeneralSetting::class)->findAll()[0];


    }
    /**
     * @Route("/comment-ca-marche", name="comment_ca_marche")
     * @param Request $request
     * @return Response
     */
    public function HowItWord(Request $request)
    {
        return $this->render('static/how-it-word.html.twig',array(
            'categories_yes' =>  $this->categories_yes,
            'generalSettings' => $this->generalSettings


        ));
    }

    /**
     * @Route("/guide-pratique", name="guide_pratique")
     * @param Request $request
     * @return Response
     */
    public function knowledgeBank(Request $request)
    {
        $articleCategories = array();
        if ($searchKey = $request->get('search_query')){
            $articlesSearchResult = $this->manager->getRepository(Article::class)->getSearchArticleByTitle($searchKey);
            foreach($articlesSearchResult as $article) {
                /**@var Article $article  */
                $articleCategories [] = $article->getArticleCategory();
            }
            $articleCategories = array_unique($articleCategories);
        }else{
            $articleCategories = $this->manager->getRepository(ArticleCategory::class)->findAll();

        }
        return $this->render('static/knowledge/index.html.twig',array(
            'categories_yes' =>  $this->categories_yes,
            'articlesCatogories' => $articleCategories
        ));
    }

    /**
     * @Route("/article/{slug}",name="show_article")
     * @param Article $article
     * @param Request $request
     * @return Response
     */
    public function showArticleBySlug(Article $article,Request $request)
    {
            return $this->render('static/knowledge/show-article.html.twig',array(
                'article' => $article,
                'categories_yes' =>  $this->categories_yes,

            ));
    }

    /**
     * @Route("/termes-conditions", name="terms_conditions")
     * @param Request $request
     * @return Response
     */
    public function termsAndConditions(Request $request)
    {
        $termes = $this->manager->getRepository(Term::class)->findAll();

        return $this->render('static/terms-conditions.html.twig',array(
            'termes' => $termes,
            'categories_yes' =>  $this->categories_yes,
            'generalSettings' => $this->generalSettings


        ));
    }
}