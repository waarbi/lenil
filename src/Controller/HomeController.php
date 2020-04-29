<?php


namespace App\Controller;


use App\Entity\Admin\Article;
use App\Entity\Admin\ArticleCategory;
use App\Entity\Admin\GeneralSetting;
use App\Entity\Admin\HomePageSection;
use App\Entity\Admin\LandingPageSlide;
use App\Entity\Contact;
use App\Entity\Demande;
use App\Entity\Proposal;
use App\Form\ContactType;
use App\Services\ContactNotification;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $generalSettings;

    private $categories_yes;
    private $sectionLayout;
    private $manager;

    public function __construct(EntityManagerInterface $manage)
    {
        $this->categories_yes = $manage->getRepository('App\Entity\Category')->findBy(array('featured' => true));
        $this->generalSettings = $manage->getRepository(GeneralSetting::class)->findAll()[0];
        $this->sectionLayout = $manage->getRepository(HomePageSection::class)->findAll()[0];
        $this->manager = $manage;


    }

    function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }
    /**
     * @Route("/", name="homepage")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function home(EntityManagerInterface $manager)
    {
        $categories_cards = $manager->getRepository('App\Entity\Category')->findBy(array('in_card' => true));

        if (is_null($this->getUser())){
            $proposals = $manager->getRepository(Proposal::class)->findAll();
            $sliders = $manager->getRepository(LandingPageSlide::class)->findAll();

            return $this->render('home_anonym.html.twig',
                array(
                    'categories_yes' =>  $this->categories_yes,
                    'categories_card' => $categories_cards,
                    'proposals'      => $proposals,
                    'generalSettings' => $this->generalSettings,
                    'sectionLayout' => $this->sectionLayout,
                    'sliders' => $sliders
                ));
        }else{

            $demandesActives = $manager->getRepository('App\Entity\Demande')->findAllActivesDemandeOfOthersUsers($this->getUser()->getId());
            //$proposals = $manager->getRepository(Proposal::class)->findBySeller($this->getUser()->getId());
            $qb = $manager->createQueryBuilder();
            $featuredProposals = $qb->add('select', 'p')
                ->add('from', 'App\Entity\Proposal p')
                ->add('where', 'p.seller = :seller')
                ->setParameter('seller', $this->getUser())
                ->andWhere('p.featured = true')
                ->setMaxResults(8)
                ->getQuery()
                ->getResult();

            $topProposals = $manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::REQUEST_STATUS_ACTIVE,'seller'=>$this->getUser()->getId(), 'level'=> 3));

            $repo = $manager->getRepository(Proposal::class);
            $status = Proposal::REQUEST_STATUS_ACTIVE;
            $quantity = 8; // We only want 5 rows (however think in increase this value if you have previously removed rows on the table)

// This is the number of rows in the database
// You can use another method according to your needs
            $totalRowsTable = $repo->createQueryBuilder('p')->select('count(p.id)')
                                    ->add('where', 'p.seller = :seller')
                                    ->setParameter('seller', $this->getUser())
                                    ->andwhere('p.statusId ='.$status)->getQuery()->getSingleScalarResult();
            // This will be in this case 10 because i have 10 records on this table
            $random_ids = $this->UniqueRandomNumbersWithinRange(1,$totalRowsTable,$quantity);

// var_dump($random_ids);
// outputs for example:
// array(1,5,2,8,3);

            $randomProposals = $repo->createQueryBuilder('a')
                ->where('a.id IN (:ids)') // if is another field, change it
                ->setParameter('ids', $random_ids)
                ->setMaxResults(8)// Add this line if you want to give a limit to the records (if all the ids exists then you would like to give a limit)
                ->getQuery()
                ->getResult();

            return $this->render('home_seller.html.twig',
                array(
                    'categories_yes'      => $this->categories_yes,
                    'categories_card'     => $categories_cards,
                    'demandesActives'     => $demandesActives,
                    'generalSettings'     => $this->generalSettings,
                    'featuredProposals'   => $featuredProposals,
                    'topProposals'        => $topProposals,
                    'randomProposals'     => $randomProposals

                ));
        }

    }


    /**
     * @Route("/contact", name="contact_support")
     * @param Request $request
     * @param $contactNotification
     * @return Response
     */
    public function contact(Request $request, ContactNotification $contactNotification)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isSubmitted()){
            $contactNotification->notify($contact);
            $this->addFlash(
                'success',
               'Votre email a été bien envoyé'
            );
            return $this->redirectToRoute('contact_support');
        }
        return $this->render('static/contact.html.twig',
            [
                'form' => $form->createView(),
                 'categories_yes' => $this->categories_yes,

            ]
        );
    }
    /**
     * Returns a JSON string with the sousCategory of the Category with the providen id.
     *@Route("/get/search/article", name="get_result_search_article")
     * @param Request $request
     * @return JsonResponse
     */
    public function searchArticle(Request $request)
    {

        // Search the neighborhoods that belongs to the city with the given id as GET parameter "cityid"

        $articleByTitle = array();
        if ($request->query->get("keySearch")){
            $articleByTitle = $this->manager->getRepository(Article::class)->createQueryBuilder("q")
                ->where("q.title LIKE :keySearch")
                ->setParameter("keySearch", '%'.$request->query->get("keySearch").'%')
                ->getQuery()
                ->getResult();
        }else{
            $articleByTitle = $this->manager->getRepository(Article::class)->findAll();
        }


        $responseArray = array();
        foreach($articleByTitle as $article){
            /**
             * @var Article $article
             */
            $responseArray[] = array(
                "id" => $article->getId(),
                "title" => $article->getTitle(),
                "image" => $article->getTopImage(),
                "content" => $article->getContent(),
                "categoryName" => $article->getArticleCategory()->getTitle()
            );
        }

        // Return array with structure of the neighborhoods of the providen city id
        return new JsonResponse($responseArray);

        // e.g
        // [{"id":"3","name":"Treasure Island"},{"id":"4","name":"Presidio of San Francisco"}]
    }
}