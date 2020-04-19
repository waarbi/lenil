<?php


namespace App\Controller;


use App\Entity\Contact;
use App\Entity\Demande;
use App\Entity\Proposal;
use App\Form\ContactType;
use App\Services\ContactNotification;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    private $categories_yes;


    public function __construct(EntityManagerInterface $manage)
    {
        $this->categories_yes = $manage->getRepository('App\Entity\Category')->findBy(array('featured' => true));

    }

    /**
     * @Route("/", name="homepage")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function home(EntityManagerInterface $manager)
    {
        $sous_categories_card = $manager->getRepository('App\Entity\SousCategory')->findBy(array('in_card' => true));
        $categories_cards = $manager->getRepository('App\Entity\Category')->findBy(array('in_card' => true));

        $categories_card = array_merge($sous_categories_card,$categories_cards);


        if (is_null($this->getUser())){
            return $this->render('home_anonym.html.twig',
                array(
                    'categories_yes' =>  $this->categories_yes,
                    'categories_card' => $categories_card,
                ));
        }else{

            $demandesActives = $manager->getRepository('App\Entity\Demande')->findAllActivesDemandeOfOthersUsers($this->getUser()->getId());
            $proposals = $manager->getRepository(Proposal::class)->findBySeller($this->getUser()->getId());
            return $this->render('home_seller.html.twig',
                array(
                    'categories_yes' => $this->categories_yes,
                    'categories_card' => $categories_card,
                    'proposals'      => $proposals,
                    'demandesActives' => $demandesActives
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
}