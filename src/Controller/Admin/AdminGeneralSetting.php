<?php


namespace App\Controller\Admin;


use App\Entity\Admin\GeneralPaymentSetting;
use App\Entity\Admin\GeneralSetting;
use App\Entity\Admin\HomePageSection;
use App\Entity\Admin\LandingPageSlide;
use App\Entity\Admin\PaypalSetting;
use App\Entity\Admin\StripeSetting;
use App\Entity\Category;
use App\Entity\Proposal;
use App\Form\Admin\CategoryEntitySelectByIdentityType;
use App\Form\Admin\GeneralPaymentSettingType;
use App\Form\Admin\GeneralSettingType;
use App\Form\Admin\HomePageSectionType;
use App\Form\Admin\LandingPageSlideType;
use App\Form\Admin\PaypalSettingType;
use App\Form\Admin\StripeSettingType;
use App\Services\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/settings")
 */
class AdminGeneralSetting extends AbstractController
{

    private $manager;
    private $nbProposal;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->nbProposal = $this->manager->getRepository(Proposal::class)->findBy(array('statusId' => Proposal::REQUEST_STATUS_INPROGRESS));


    }

    /**
     * @Route("/updategeneralsettings/", name="update_general_setting", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function updateGeneralSettings(Request $request): Response
    {
        $generalSetting = $this->manager->getRepository(GeneralSetting::class)->findAll()[0];
        $form = $this->createForm(GeneralSettingType::class, $generalSetting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->manager->persist($generalSetting);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez mis à jour les paramètres généraux');
            return $this->redirectToRoute('update_general_setting');
        }
        return $this->render('admin/settings/general-setting.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),


        ]);
    }

    /**
     * @Route("/updatetextsilderinlayoutsettings/", name="update_text_slider_in_layout_setting", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function updateLayoutSettings(Request $request): Response
    {
        $textLayout = $this->manager->getRepository(HomePageSection::class)->findAll()[0];
        $sliders = $this->manager->getRepository(LandingPageSlide::class)->findAll();
        $cardCategories = $this->manager->getRepository(Category::class)->findBy(array('in_card' => true));

        $form = $this->createForm(HomePageSectionType::class, $textLayout);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->manager->persist($textLayout);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez mis à jour les textes de la section slider');
            return $this->redirectToRoute('update_text_slider_in_layout_setting');
        }
        return $this->render('admin/settings/layout-setting.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
            'sliders' => $sliders,
            'cardCategories' => $cardCategories


        ]);
    }

    /**
     * @Route("/ajouternouvelslide/", name="add_new_slide_setting", methods={"GET","POST"})
     * @param Request $request
     * @param FileUploader $fileUploader
     * @return Response
     */
    public function addNewSlide(Request $request, FileUploader $fileUploader): Response
    {
        $slide = new LandingPageSlide();
        $form = $this->createForm(LandingPageSlideType::class, $slide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form['imageName']->getData();
            if ($image) {
                $adFileName = $fileUploader->upload($image);
                $slide->setImageName($adFileName);
            }
            $this->manager->persist($slide);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez créé un nouveau slide');
            return $this->redirectToRoute('update_text_slider_in_layout_setting');
        }
        return $this->render('admin/settings/new-slider.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),


        ]);
    }

    /**
     * @Route("/slide/{id}", name="delete_slide_homepage")
     * @param LandingPageSlide $slide
     * @param FileUploader $fileUploader
     * @return Response
     */
    public function deleteSlide(LandingPageSlide $slide, FileUploader $fileUploader): Response
    {
        $fileUploader->deleteFile($slide->getImageName());
        $this->manager->remove($slide);
        $this->manager->flush();
        $this->addFlash('success', 'Le Slide a été bien supprimée');

        return $this->redirectToRoute('update_text_slider_in_layout_setting');
    }

    /**
     * @Route("/editslide/{id}", name="edit_slide_setting", methods={"GET","POST"})
     * @param Request $request
     * @param LandingPageSlide $slide
     * @param FileUploader $fileUploader
     * @return Response
     */
    public function editSlide(Request $request, LandingPageSlide $slide,FileUploader $fileUploader): Response
    {
        $form = $this->createForm(LandingPageSlideType::class, $slide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form['imageName']->getData();
            if ($image) {
                $fileUploader->deleteFile($slide->getImageName());
                $adFileName = $fileUploader->upload($image);
                $slide->setImageName($adFileName);
            }
            $this->manager->persist($slide);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez modifié le slide');
            return $this->redirectToRoute('update_text_slider_in_layout_setting');
        }
        return $this->render('admin/settings/new-slider.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
            'slide' => $slide


        ]);
    }
    /**
     * @Route("/ajouterCard/", name="add_card", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function addCard(Request $request): Response
    {

        $form = $this->createForm(CategoryEntitySelectByIdentityType::class, null);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $datas = $request->get('categories');
            foreach ($datas as $idCat){
                $cat = $this->manager->getRepository(Category::class)->findBy(array('id' => $idCat))[0];
                $cat->setInCard(true);
                $this->manager->persist($cat);
            }
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez mis à jour les cartes de la homePage');
            return $this->redirectToRoute('update_text_slider_in_layout_setting');
        }
        return $this->render('admin/settings/add-card.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),


        ]);
    }

    /**
     * @Route("/carte/{id}", name="delete_carte_homepage")
     * @param Category $category
     * @return Response
     */
    public function deleteCarte(Category $category): Response
    {
        $category->setInCard(false);
        $this->manager->persist($category);
        $this->manager->flush();
        $this->addFlash('success', 'La carte a été bien supprimée de la HomePage');

        return $this->redirectToRoute('update_text_slider_in_layout_setting');
    }

    /**
     * @Route("/updategeneralpaimentsettings/", name="update_general_paiment_setting", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function updateGeneralPaimentSettings(Request $request): Response
    {
        $paypalPaymentSetting = $this->manager->getRepository(PaypalSetting::class)->findAll()[0];
        $formpaypal = $this->createForm(PaypalSettingType::class, $paypalPaymentSetting);
        $formpaypal->handleRequest($request);

        if ($formpaypal->isSubmitted() && $formpaypal->isValid()) {
            $this->manager->persist($paypalPaymentSetting);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez mis à jour les paramètres Paypal');
            return $this->redirectToRoute('update_general_paiment_setting');
        }

        $stripePaymentSetting = $this->manager->getRepository(StripeSetting::class)->findAll()[0];
        $formstripe = $this->createForm(StripeSettingType::class, $stripePaymentSetting);
        $formstripe->handleRequest($request);

        if ($formstripe->isSubmitted() && $formstripe->isValid()) {
            $this->manager->persist($stripePaymentSetting);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez mis à jour les paramètres Stripe');
            return $this->redirectToRoute('update_general_paiment_setting');
        }

        $generalPaymentSetting = $this->manager->getRepository(GeneralPaymentSetting::class)->findAll()[0];
        $form = $this->createForm(GeneralPaymentSettingType::class, $generalPaymentSetting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->manager->persist($generalPaymentSetting);
            $this->manager->flush();
            $this->addFlash('success', 'Vous avez mis à jour les paramètres généraux paiement');
            return $this->redirectToRoute('update_general_paiment_setting');
        }

        return $this->render('admin/settings/payment-setting.html.twig', [
            'form' => $form->createView(),
            'nbProposal' => count($this->nbProposal),
            'user' => $this->getUser(),
            'formpaypal' => $formpaypal->createView(),
            'formstripe' => $formstripe->createView(),


        ]);
    }

}