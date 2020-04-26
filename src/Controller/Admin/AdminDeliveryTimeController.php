<?php


namespace App\Controller\Admin;


use App\Entity\DeliveryTime;
use App\Entity\Proposal;
use App\Form\Admin\DeliveryTimeType;
use App\Services\PaginationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/deliveryTime")
 */
class AdminDeliveryTimeController extends AbstractController
{
    private $manager;
    private $nbProposal;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->nbProposal = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::PROPOSAL_STATUS_INPROGRESS));

    }

    /**
     * @Route("/index/page/{page<\d+>?1}", name="admin_index_delivery_time", methods={"GET","POST"})
     * @param $page
     * @param PaginationService $paginationService
     * @return Response
     */
    public function indexAdminDeliveryTime( $page,PaginationService $paginationService): Response
    {
        $paginationService->setEntityClass(DeliveryTime::class)->setPage($page);
        return $this->render('admin/deliverytime/index.html.twig', [
            'pagination' => $paginationService,
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/create/", name="admin_create_delivery_time", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function create(Request $request): Response
    {
        $deliveryTime = new DeliveryTime();
        $form = $this->createForm(DeliveryTimeType::class, $deliveryTime);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->manager->persist($deliveryTime);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez créé un délais de livraison');
            return $this->redirectToRoute('admin_index_delivery_time');
        }
        return $this->render('admin/deliverytime/create.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),

        ]);
    }

    /**
     * @Route("/deliverytime/delete/{id}", name="admin_delete_delivery_time")
     * @param DeliveryTime $deliveryTime
     * @return Response
     */
    public function deleteDeliveryTime(DeliveryTime $deliveryTime): Response
    {

        $this->manager->remove($deliveryTime);
        $this->manager->flush();
        $this->addFlash('success', 'Le délais de livraison a été bien supprimée');

        return $this->redirectToRoute('admin_index_delivery_time');
    }

    /**
     * @Route("/deliverytime/edit/{id}", name="admin_edit_delivery_time", methods={"GET","POST"})
     * @param Request $request
     * @param DeliveryTime $deliveryTime
     * @return Response
     */
    public function editDeliveryTime(Request $request, DeliveryTime $deliveryTime ): Response
    {
        $form = $this->createForm(DeliveryTimeType::class, $deliveryTime);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $this->manager->persist($deliveryTime);
            $this->manager->flush();

            $this->addFlash('success', 'Vous avez modifié le délais de livraison');
            return $this->redirectToRoute('admin_index_delivery_time');
        }
        return $this->render('admin/deliverytime/edit.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
            'delivery' => $deliveryTime


        ]);
    }
}