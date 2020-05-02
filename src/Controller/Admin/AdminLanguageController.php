<?php


namespace App\Controller\Admin;


use App\Entity\LanguageName;
use App\Entity\Proposal;
use App\Form\Admin\LanguageNameType;
use App\Services\PaginationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/languages")
 */
class AdminLanguageController extends AbstractController
{
    private $manager;
    private $nbProposal;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->nbProposal = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_INPROGRESS));

    }

    /**
     * @Route("/index/page/{page<\d+>?1}", name="admin_index_language", methods={"GET","POST"})
     * @param $page
     * @param PaginationService $paginationService
     * @return Response
     */
    public function indexAdminLanguage($page,PaginationService $paginationService): Response
    {
        $paginationService->setEntityClass(LanguageName::class)->setPage($page);
        return $this->render('admin/language/index.html.twig', [
            'pagination' => $paginationService,
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/create/", name="admin_create_language", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function create(Request $request): Response
    {
        $languageName = new LanguageName();
        $form = $this->createForm(LanguageNameType::class, $languageName);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->manager->persist($languageName);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez créé une nouvelle langue');
            return $this->redirectToRoute('admin_index_language');
        }
        return $this->render('admin/language/create.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),

        ]);
    }

    /**
     * @Route("/language/delete/{id}", name="admin_delete_language")
     * @param LanguageName $languageName
     * @return Response
     */
    public function deleteLanguage(LanguageName $languageName): Response
    {

        $this->manager->remove($languageName);
        $this->manager->flush();
        $this->addFlash('success', 'La langue a été bien supprimée');

        return $this->redirectToRoute('admin_index_language');
    }

    /**
     * @Route("/language/edit/{id}", name="admin_edit_language", methods={"GET","POST"})
     * @param Request $request
     * @param LanguageName $languageName
     * @return Response
     */
    public function editLangue(Request $request, LanguageName $languageName ): Response
    {
        $form = $this->createForm(LanguageNameType::class, $languageName);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $this->manager->persist($languageName);
            $this->manager->flush();

            $this->addFlash('success', 'Vous avez modifié une langue');
            return $this->redirectToRoute('admin_index_language');
        }
        return $this->render('admin/language/create.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),

        ]);
    }
}