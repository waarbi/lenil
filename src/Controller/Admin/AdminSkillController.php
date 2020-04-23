<?php


namespace App\Controller\Admin;


use App\Entity\Proposal;
use App\Entity\SkillsName;
use App\Form\Admin\SkillsNameType;
use App\Services\PaginationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/skills")
 */
class AdminSkillController extends AbstractController
{
    private $manager;
    private $nbProposal;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->nbProposal = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::REQUEST_STATUS_INPROGRESS));

    }

    /**
     * @Route("/index/page/{page<\d+>?1}", name="admin_index_skills", methods={"GET","POST"})
     * @param $page
     * @param PaginationService $paginationService
     * @return Response
     */
    public function indexAdminSkill($page,PaginationService $paginationService): Response
    {
        $paginationService->setEntityClass(SkillsName::class)->setPage($page);
        return $this->render('admin/skills/index.html.twig', [
            'pagination' => $paginationService,
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/create/", name="admin_create__skill", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function create(Request $request): Response
    {
        $skillsName = new SkillsName();
        $form = $this->createForm(SkillsNameType::class, $skillsName);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->manager->persist($skillsName);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez créé une nouvelle compétence');
            return $this->redirectToRoute('admin_index_skills');
        }
        return $this->render('admin/skills/create.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),

        ]);
    }

    /**
     * @Route("/skill/delete/{id}", name="admin_delete__skill")
     * @param SkillsName $skillsName
     * @return Response
     */
    public function deleteSkill(SkillsName $skillsName): Response
    {

        $this->manager->remove($skillsName);
        $this->manager->flush();
        $this->addFlash('success', 'La compétence a été bien supprimée');

        return $this->redirectToRoute('admin_index_skills');
    }

    /**
     * @Route("/skill/edit/{id}", name="admin_edit__skill", methods={"GET","POST"})
     * @param Request $request
     * @param SkillsName $skillsName
     * @return Response
     */
    public function editSkill(Request $request, SkillsName $skillsName ): Response
    {
        $form = $this->createForm(SkillsNameType::class, $skillsName);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $this->manager->persist($skillsName);
            $this->manager->flush();

            $this->addFlash('success', 'Vous avez modifié une compétence');
            return $this->redirectToRoute('admin_index_skills');
        }
        return $this->render('admin/skills/create.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),

        ]);
    }
}