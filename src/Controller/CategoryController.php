<?php


namespace App\Controller;


use App\Entity\Admin\GeneralSetting;
use App\Entity\Category;
use App\Entity\Proposal;
use App\Entity\SousCategory;
use App\Entity\User;
use App\Services\PaginationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
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
     * @Route("/categories/{categorySlug}/{subcategorySlug}", name="category_services")
     * @param $categorySlug
     * @param $subcategorySlug
     * @return Response
     */
    public function getServicesByCategory($categorySlug,$subcategorySlug)
    {

        $proposals = $this->manager->getRepository(Proposal::class)->loadCategoryProposal($categorySlug,$subcategorySlug, array(),array(),array());
        $deliveyTimes  = array();
        $sellers = array();
        foreach ($proposals as $proposal){
            /**@var Proposal $proposal  */
            $deliveyTimes [] = $proposal->getDeliveryTime();
            $sellers [] = $proposal->getSeller();
        }
        $levelsUsers = array();
        foreach (array_unique($sellers) as $user){
            /**@var User $user */
            $levelsUsers [] = $user->getLevel();
        }

        return $this->render('categorie/service-categorie.html.twig', array(
                'categories_yes' => $this->categories_yes,
                'proposals' => $proposals,
                'filterDeliveryTimes' =>array_unique($deliveyTimes),
                'filterLevels' => array_unique($levelsUsers),
                'catSlug' => $categorySlug,
                'categories' => $this->manager->getRepository(Category::class)->findAll(),
                'subCatSlug' => $subcategorySlug,
                'cat' => $this->manager->getRepository(Category::class)->findBy(array('slug' => $categorySlug))[0],
                'subcat' => $this->manager->getRepository(SousCategory::class)->findBy(array('slug' => $subcategorySlug))
                    ? $this->manager->getRepository(SousCategory::class)->findBy(array('slug' => $subcategorySlug))[0]:null

        ));

    }
    /**
     *@Route("/load/category/proposal", name="load_category_or_subcategory_proposal")
     * @param Request $request
     * @return JsonResponse
     */
    public function loadCategoryProposalResult(Request $request)
    {

        $onlineFilter = json_decode($request->get('json_online_seller'));
        $deliveryFilter = json_decode($request->get('json_delivery'));
        $levelFilter = json_decode($request->get('json_level_seller'));
        $catSlug = $request->get('cat_slug');
        $subCatSlug = $request->get('sub_cat_slug');

        $proposals = $this->manager->getRepository(Proposal::class)->loadCategoryProposal($catSlug,$subCatSlug, $onlineFilter,$deliveryFilter,$levelFilter);
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
                "proposalTitle" => $proposal->getTitle(),
                "proposalRating" => $proposal->getRating()? $proposal->getRating():'',
                "proposalViews" => $proposal->getViews() ? $proposal->getViews():'',
                "proposalPrice" => $proposal->getPrice(),
                "proposalUrl" => '/proposal/'.$proposal->getSlug(),
            );
        }
        $results = array(
            "count_proposals" => count($proposalsArrayResult),
            "proposals" => $proposalsArrayResult,
        );
        return new JsonResponse($results);
    }
}