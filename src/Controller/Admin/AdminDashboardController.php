<?php

namespace App\Controller\Admin;

use App\Entity\Admin\GeneralSetting;
use App\Entity\Proposal;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    private $manager;
    private $generalSettings;


    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->generalSettings = $manager->getRepository(GeneralSetting::class)->findAll()[0];


    }

    /**
     * @Route("/admin", name="admin_dashboard")
     */
    public function index()
    {   
        $nbProposal = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::REQUEST_STATUS_INPROGRESS));
        $nbUser = $this->manager->getRepository(User::class)->findAll();
        //$nbOrder = $this->manager->getRepository(Proposal::class)->findAll();
        //$nbSupportRequest = $this->manager->getRepository(Proposal::class)->findAll();

        return $this->render('admin/dashboard/index.html.twig', [
            'user' => $this->getUser(),
            'nbUser' => count($nbUser),
            'nbProposal' => count($nbProposal),
            'generalSettings' => $this->generalSettings

        ]);
    }
}
