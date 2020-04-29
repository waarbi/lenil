<?php


namespace App\Controller\Admin;


use App\Entity\Admin\Term;
use App\Entity\Proposal;
use App\Form\Admin\TermType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/termes")
 */
class AdminTermController extends AbstractController
{
    private $manager;
    private $nbProposal;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->nbProposal = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_INPROGRESS));

    }

    /**
     * @Route("/index/", name="admin_index_termes", methods={"GET","POST"})
     * @return Response
     */
    public function indexAdminTermes(): Response
    {
        $termes = $this->manager->getRepository(Term::class)->findAll();

        return $this->render('admin/terms/index.html.twig', [
            'termes' => $termes,
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/create/", name="admin_create_termes", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function createTerme(Request $request): Response
    {
        $terme = new Term();
        $form = $this->createForm(TermType::class, $terme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->manager->persist($terme);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez créé un terme');
            return $this->redirectToRoute('admin_index_termes');
        }
        return $this->render('admin/terms/create.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),

        ]);
    }

    /**
     * @Route("/delete/{id}", name="admin_delete_term")
     * @param Term $term
     * @return Response
     */
    public function deleteTerme(Term $term): Response
    {
        $this->manager->remove($term);
        $this->manager->flush();
        $this->addFlash('success', 'Le terme a été bien supprimé');

        return $this->redirectToRoute('admin_index_termes');
    }

    /**
     * @Route("/edit/{id}", name="admin_edit_term", methods={"GET","POST"})
     * @param Request $request
     * @param Term $term
     * @return Response
     */
    public function editTerm(Request $request, Term $term): Response
    {
        $form = $this->createForm(TermType::class, $term);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->manager->persist($term);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez modifié un term');
            return $this->redirectToRoute('admin_index_termes');
        }
        return $this->render('admin/terms/create.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),

        ]);
    }
}