<?php


namespace App\Controller;


use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Repository\UserRepository;
use App\Repository\PaysRepository;
use App\Repository\LevelRepository;
use App\Repository\LanguageNameRepository;
use App\Services\PaginationService;
/**
 * @Route("/freelancers")
 *
 */
class FreelancerController extends AbstractController
{

    private $categories_yes;
    private $nbfreelancers;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->categories_yes = $manager->getRepository('App\Entity\Category')->findBy(array('featured' => true));

    }

    /**
     * @Route("/page/{page<\d+>?1}", name="index_freelancers", methods={"GET"})
     * @param $page
     * @param PaginationService $paginationService
     * @param UserRepository $userRepository
     * @param PaysRepository $paysRepository
     * @param LevelRepository $levelRepository
     * @param LanguageNameRepository $languageNameRepository
     * @return Response
     */
    public function index($page,PaginationService $paginationService,UserRepository $userRepository, PaysRepository $paysRepository, LevelRepository $levelRepository, LanguageNameRepository $languageNameRepository): Response
    {

        $freelancers = $userRepository->findAll();
        $pays = $paysRepository->findAll();
        $languages = $languageNameRepository->findAll();
        $levels = $levelRepository->findAll();
        $paginationService->setEntityClass(User::class)->setPage($page);


        return $this->render('freelancer/index.html.twig', [
            'categories_yes' => $this->categories_yes,
            'pagination' => $paginationService,
            //'nbFreelancers' => count($this->freelancers),
            'freelancers' => $freelancers,
            'pays' => $pays,
            'levels'=>$levels,
            'languages' =>$languages,
        ]);
    }

    /**
     * @Route("/freelance/details/{slug}", name="show_freelancer")
     * @param User $user
     * @return Response
     */
    public function show(User $user)
    {
        $comments = $user->getComments();

        return $this->render('freelancer/show.html.twig',
            array(
                'categories_yes' => $this->categories_yes,
                'freelancer' => $user,
                'comments' => $comments,
            )
        );
    }
}