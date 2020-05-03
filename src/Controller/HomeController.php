<?php


namespace App\Controller;


use App\Entity\Admin\Article;
use App\Entity\Admin\GeneralSetting;
use App\Entity\Admin\HomePageSection;
use App\Entity\Admin\LandingPageSlide;
use App\Entity\Contact;
use App\Entity\DeliveryTime;
use App\Entity\Proposal;
use App\Entity\ProposalSearchByTitle;
use App\Entity\User;
use App\Form\ContactType;
use App\Form\ProposalSearchByTitleType;
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


    /**
     * @Route("/", name="homepage", methods={"GET","POST"})
     * @param EntityManagerInterface $manager
     * @param Request $request
     * @return Response
     */
    public function home(EntityManagerInterface $manager, Request $request)
    {
        $categories_cards = $manager->getRepository('App\Entity\Category')->findBy(array('in_card' => true));

        $proposalSearch = new ProposalSearchByTitle();
        $formSearchServices = $this->createForm(ProposalSearchByTitleType::class, $proposalSearch);
        $formSearchServices->handleRequest($request);
        $proposalsSearchResult = array();
        if ($request->get('search_query')){
            $proposalsSearchResult = $this->manager->getRepository(Proposal::class)->getSearchProposalByStringTitle($request->get('search_query'));
        }
        if ($formSearchServices->isSubmitted() && $formSearchServices->isValid()) {
            $proposalsSearchResult = $this->manager->getRepository(Proposal::class)->getSearchProposalByTitle($proposalSearch);
        }
        if ($request->get('search_query') || $formSearchServices->isSubmitted() && $formSearchServices->isValid()){
            $deliveyTimes  = array();
            $categories  = array();
            $sellers = array();
            foreach ($proposalsSearchResult as $proposal){
                /**@var Proposal $proposal  */
                $deliveyTimes [] = $proposal->getDeliveryTime();
                $categories [] = $proposal->getCategory();
                $sellers [] = $proposal->getSeller();
            }
            $levelsUsers = array();
            foreach (array_unique($sellers) as $user){
                /**@var User $user */
                $levelsUsers [] = $user->getLevel();
            }
            $countryUsers = array();
            foreach (array_unique($sellers) as $user){
                /**@var User $user */
                $countryUsers [] = $user->getPays();
            }

            return $this->render('proposals/search-result.html.twig', array(
                'searchQuery' => $request->get('search_query') ? $request->get('search_query') : $proposalSearch->getTitle(),
                'proposalsSearch' =>$proposalsSearchResult,
                'filterCategories' => array_unique($categories),
                'filterDeliveryTimes' =>array_unique($deliveyTimes),
                'filterCountry' => array_unique($countryUsers),
                'filterLevels' => array_unique($levelsUsers),
                'categories_yes' =>  $this->categories_yes,
            ));
        }

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')){
            $proposals = $manager->getRepository(Proposal::class)->findBy(array(), null, $limit = 10);
            $sliders = $manager->getRepository(LandingPageSlide::class)->findBy(array('onHomePageAnonym' => true));

            return $this->render('home_anonym.html.twig',
                array(
                    'categories_yes' =>  $this->categories_yes,
                    'categories_card' => $categories_cards,
                    'proposals'      => $proposals,
                    'generalSettings' => $this->generalSettings,
                    'sectionLayout' => $this->sectionLayout,
                    'sliders' => $sliders,
                    'formSearchServices' => $formSearchServices->createView()
                ));
        }else{

            $demandesActives = $manager->getRepository('App\Entity\Demande')->findAllActivesDemandeOfOthersUsers($this->getUser()->getId());
            $sliders = $manager->getRepository(LandingPageSlide::class)->findBy(array('onHomePageSeller' => true));

            $status = Proposal::PROPOSAL_STATUS_ACTIVE;
            $maxResult = 8;
            $featuredProposals = $manager->getRepository(Proposal::class)->getFeaturedProposals($status, $maxResult);
            $topProposals = $manager->getRepository(Proposal::class)->getTopProposals($status, $maxResult);
            $randomProposals = $manager->getRepository(Proposal::class)->getRandomProposals($maxResult);
            shuffle($randomProposals);

            return $this->render('home_seller.html.twig',
                array(
                    'categories_yes'      => $this->categories_yes,
                    'categories_card'     => $categories_cards,
                    'demandesActives'     => $demandesActives,
                    'generalSettings'     => $this->generalSettings,
                    'sliders'             => $sliders,
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
        if ($request->query->get("keySearch")){
            $articleByTitle = $this->manager->getRepository(Article::class)->getSearchArticleByTitle($request->query->get("keySearch"));
        }else{
            $articleByTitle = $this->manager->getRepository(Article::class)->findAll();
        }
        $responseArray = array();
        foreach($articleByTitle as $article){
            /**@var Article $article */
            $responseArray[] = array(
                "id" => $article->getId(),
                "title" => $article->getTitle(),
                "image" => $article->getTopImage(),
                "content" => $article->getContent(),
                "categoryName" => $article->getArticleCategory()->getTitle()
            );
        }
        return new JsonResponse($responseArray);
    }
    /**
     *@Route("/get/search/service_user", name="get_result_search_service_user")
     * @param Request $request
     * @return JsonResponse
     */
    public function searchServiceOrUser(Request $request)
    {
        $results = array(
            "count_proposals" => 0,
            "count_sellers" => 0,
            "proposals" => array(),
            "sellers" => array()
        );

        if ($request->query->get("search_query")){
            $serviceByNameOrDescription = $this->manager->getRepository(Proposal::class)->getSearchProposalByStringTitle($request->query->get("search_query"));
            $servicesArray = array();
            foreach($serviceByNameOrDescription as $service){
                /** @var Proposal $service */
                $servicesArray[] = array(
                    "title" => $service->getTitle(),
                    "url" => '/proposals/show/'.$service->getSeller()->getSlug().'/'.$service->getSlug(),
                );
            }
            $userByLastnameOrFirstname = $this->manager->getRepository(User::class)->getSearchUserByStringName($request->query->get("search_query"));
            $usersArray = array();
            foreach($userByLastnameOrFirstname as $user){
                /**@var User $user */
                $usersArray[] = array(
                    "name" => $user->getFullName(),
                    "url" => '/freelancer/'.$user->getSlug(),
                );
            }
            $results = array(
                "count_proposals" => count($servicesArray),
                "count_sellers" => count($usersArray),
                "proposals" => $servicesArray,
                "sellers" => $usersArray
            );
        }
        return new JsonResponse($results);
    }
    /**
     *@Route("/load/search/proposal", name="load_search_proposal")
     * @param Request $request
     * @return JsonResponse
     */
    public function loadSearchProposalResult(Request $request)
    {

        $onlineFilter = json_decode($request->get('json_online_seller'));
        $categoriesFilter = json_decode($request->get('json_categories'));
        $deliveryFilter = json_decode($request->get('json_delivery'));
        $levelFilter = json_decode($request->get('json_level_seller'));
        $countryFilter = json_decode($request->get('json_country_seller'));
        $searchKey = $request->get('searchKey');

        $proposals = $this->manager->getRepository(Proposal::class)->loadSearchProposal($searchKey, $onlineFilter,$categoriesFilter,$deliveryFilter,$levelFilter,$countryFilter);
        $results = array(
            "count_proposals" => 0,
            "proposals" => array(),
        );
        $proposalsArrayResult = array();
        foreach($proposals as $proposal){
            /**@var Proposal $proposal */
            $proposalsArrayResult [] = array(
                "proposalFirstImage" => $proposal->getProposalImages()[0]->getFileName(),
                "sellerAvatar" => $proposal->getSeller()->getPicture(),
                "sellerName" => $proposal->getSeller()->getFullName(),
                "sellerLevel" => $proposal->getSeller()->getLevel()->getName(),
                "sellerCountry" => $proposal->getSeller()->getPays()->getName(),
                "sellerSlug" => $proposal->getSeller()->getSlug(),
                "proposalSlug" => $proposal->getSlug(),
                "proposalTitle" => $proposal->getTitle(),
                "proposalRating" => $proposal->getRating()? $proposal->getRating():'',
                "proposalViews" => $proposal->getViews() ? $proposal->getViews():'',
                "proposalPrice" => $proposal->getPrice(),
                "proposalUrl" => '/proposals/show/'.$proposal->getSeller()->getSlug().'/'.$proposal->getSlug(),
            );
        }
        $results = array(
            "count_proposals" => count($proposalsArrayResult),
            "proposals" => $proposalsArrayResult,
        );
        return new JsonResponse($results);
    }
}