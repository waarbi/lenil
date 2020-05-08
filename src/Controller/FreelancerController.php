<?php


namespace App\Controller;


use App\Entity\Proposal;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/freelancers")
 *
 */
class FreelancerController extends AbstractController
{

    private $categories_yes;
    private $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->categories_yes = $manager->getRepository('App\Entity\Category')->findBy(array('featured' => true));
        $this->manager = $manager;

    }

    /**
     * @Route("/index/", name="index_freelancers", methods={"GET"})
     * @return Response
     */
    public function indexFreelancers(): Response
    {
        $freelancers = $this->manager->getRepository(User::class)->findAllFreelancer();

        $filterCountry  = array();
        $filterLevels = array();
        foreach ($freelancers as $freelancer){
            /**@var User $freelancer  */
            $filterCountry [] = $freelancer->getPays();
            $filterLevels [] = $freelancer->getLevel();
        }

        return $this->render('freelancer/index.html.twig', [
            'categories_yes' => $this->categories_yes,
            'filterCountry' => array_unique($filterCountry),
            'freelancers' => $freelancers,
            'filterLevels' => array_unique($filterLevels),
        ]);
    }

    /**
     * @Route("/freelance/details/{slug}", name="show_freelancer")
     * @param User $user
     * @return Response
     */
    public function show(User $user)
    {
        $status = Proposal::PROPOSAL_STATUS_ACTIVE;

        $comments = $user->getComments();
        $proposals = $this->manager->getRepository(Proposal::class)->getUserProposals($user->getId() ,$status);

        return $this->render('freelancer/show.html.twig',
            array(
                'categories_yes' => $this->categories_yes,
                'freelancer' => $user,
                'comments' => $comments,
                'proposals'      => $proposals,

            )
        );
    }
    /**
     *@Route("/load/search/freelancers", name="load_search_freelancer")
     * @param Request $request
     * @return JsonResponse
     */
    public function loadSearchFreelancerResult(Request $request)
    {

        $onlineFilter = json_decode($request->get('json_online_seller'));
        $levelFilter = json_decode($request->get('json_level_seller'));
        $countryFilter = json_decode($request->get('json_country_seller'));
        $freelancers = $this->manager->getRepository(User::class)->loadSearchFreelancers($onlineFilter,$levelFilter,$countryFilter);
        $results = array(
            "count_freelancers" => 0,
            "freelancers" => array(),
        );
        $freelancersArrayResult = array();


        foreach($freelancers as $freelancer){
            /**@var User $freelancer */
            $freelancersArrayResult [] = array(
                "avatar" => $freelancer->getPicture(),
                "fullname" => $freelancer->getFullName(),
                "description" => $freelancer->getDescription(),
                "level" => $freelancer->getLevel() ? $freelancer->getLevel()->getName(): '',
                "country" => $freelancer->getPays()->getName(),
                'sinceMember' => $this->formatDateFrench($freelancer->getCreatedAt()),
                'delivery' => $freelancer->getRecentDelivery() ? $freelancer->getRecentDelivery()->format('l d F Y') : '',
                "freelancerUrl" => '/freelancers/freelance/details/'.$freelancer->getSlug(),
                "firstProposal" => $freelancer->getProposals() ? $freelancer->getProposals()->first()->getTitle() : ''
            );
        }
        $results = array(
            "count_freelancers" => count($freelancersArrayResult),
            "freelancers" => $freelancersArrayResult,
        );
        return new JsonResponse($results);
    }

    public function formatDateFrench($date){
        setlocale(LC_TIME, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');
        $timestamp = $date->getTimestamp();
        $dateformatee = strftime('%A %d %B %Y',$timestamp);
        return $dateformatee;
    }
}