<?php

namespace App\Controller;

use App\Entity\Admin\GeneralSetting;
use App\Entity\ForgotPassword;
use App\Entity\Language;
use App\Entity\Proposal;
use App\Entity\Skill;
use App\Entity\User;
use App\Form\AccountType;
use App\Entity\PasswordUpdate;
use App\Form\ForgotPasswordType;
use App\Form\LangueType;
use App\Form\RegistrationType;
use App\Form\PasswordUpdateType;
use App\Form\SkillsType;
use App\Services\FileUploader;
use App\Services\MailerService;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountController extends AbstractController
{
    private $categories_yes;
    private $generalSettings;


    public function __construct(EntityManagerInterface $manager)
    {
        $this->categories_yes = $manager->getRepository('App\Entity\Category')->findBy(array('featured' => true));
        $this->generalSettings = $manager->getRepository(GeneralSetting::class)->findAll()[0];


    }

    /**
     * Permet d'afficher et de gérer le formulaire de connexion
     *
     * @Route("/login", name="account_login")
     *
     * @return Response
     */
    public function login(AuthenticationUtils $utils, EntityManagerInterface $manager)
    {
        $error = $utils->getLastAuthenticationError();
        $username = $utils->getLastUsername();


        return $this->render('account/login.html.twig', [
            'hasError' => $error != null,
            'username' => $username,
            'categories_yes' => $this->categories_yes,
            'generalSettings' => $this->generalSettings

        ]);
    }

    /**
     * Permet de se déconnecter
     *
     * @Route("/logout", name="account_logout")
     *
     * @return void
     */
    public function logout()
    {

    }

    /**
     * Permet d'afficher le formulaire d'inscription
     *
     * @Route("/register", name="account_register")
     *
     * @param Request $request
     * @param AuthenticationUtils $authenticationUtils
     * @param FileUploader $fileUploader
     * @param MailerService $mailerService
     * @param EntityManagerInterface $manager
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     * @throws Exception
     */
    public function register(Request $request, AuthenticationUtils $authenticationUtils,FileUploader $fileUploader, MailerService $mailerService, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        $user = new User();
        $registrationForm = $this->createForm(RegistrationType::class, $user);

        $registrationForm->handleRequest($request);

        if ($registrationForm->isSubmitted() && $registrationForm->isValid()) {
            $image = $registrationForm['picture']->getData();
            if (is_null($image)) {
                $user->setPicture('default-user.png');
            } else {
                if ($image) {
                    $adFileName = $fileUploader->upload($image);
                    $user->setPicture($adFileName);
                }
            }
            $hash = $encoder->encodePassword($user, $user->getHash());
            $user->setHash($hash);
            $user->setConfirmationToken($this->generateToken());

            $manager->persist($user);
            $manager->flush();

            $token = $user->getConfirmationToken();
            $email = $user->getEmail();

            $urlConfirm = $request->headers->get('host');
            $mailerService->sendToken($urlConfirm,$token, $email, 'confirmation_account.html.twig');
            $this->addFlash('warning', 'Votre inscription a été validée, vous allez recevoir un email de confirmation pour activer votre compte');

            return $this->redirectToRoute("account_login");
        }

        return $this->render('account/registration.html.twig', [
            'registrationForm' => $registrationForm->createView(),
            'categories_yes' => $this->categories_yes,
            'last_username' => $lastUsername,
            'error' => $error,
             'generalSettings' => $this->generalSettings


        ]);
    }
    /**
     * @Route("/account/confirm/{token}/{username}", name="confirm_account")
     * @param $token
     * @param $username
     * @return Response
     */
    public function confirmAccount($token, $username): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(['email' => $username]);
        $tokenExist = $user->getConfirmationToken();
        if($token === $tokenExist) {
            $user->setConfirmationToken(null);
            $user->setEnabled(true);
            $em->persist($user);
            $em->flush();
            $this->addFlash(
                'success',
                "Votre compte a bien été activé ! Vous pouvez maintenant vous connectez !"
            );
            return $this->redirectToRoute('homepage');
        } else {
            return $this->render('account/token-expire.html.twig',array(
                'categories_yes' => $this->categories_yes,
            ));
        }
    }


    /**
     * Permet d'afficher le profil de l'utilisateur concerné
     *
     * @Route("/account",name="account_index")
     * @IsGranted("ROLE_USER")
     *
     * @param EntityManagerInterface $manager
     * @param Request $request
     * @return Response
     */
    public function myAccount(EntityManagerInterface $manager, Request $request)
    {
        $skill = new Skill();
        $formSkill = $this->createForm(SkillsType::class, $skill);
        $formSkill->handleRequest($request);


        if ($formSkill->isSubmitted() && $formSkill->isValid()) {
            $skill->addUser($this->getUser());
            $this->getUser()->addSkill($skill);
            $manager->persist($skill);
            $manager->flush();
        }

        $langue = new Language();
        $formLanguage = $this->createForm(LangueType::class, $langue);
        $formLanguage->handleRequest($request);

        if ($formLanguage->isSubmitted() && $formLanguage->isValid()) {
            $langue->addUser($this->getUser());
            $this->getUser()->addLanguage($langue);
            $manager->persist($langue);
            $manager->flush();
        }

        $status = Proposal::PROPOSAL_STATUS_ACTIVE;

        $proposals = $manager->getRepository(Proposal::class)->getUserProposals($this->getUser()->getId() ,$status);

        return $this->render('seller/index.html.twig', [
            'user' => $this->getUser(),
            'categories_yes' => $this->categories_yes,
            'formSkill'      => $formSkill->createView(),
            'formLanguage'   => $formLanguage->createView(),
            'proposals'      => $proposals
        ]);
    }
    /**
     * @Route("/mot-de-passe-oublier", name="forgotten_password")
     * @param Request $request
     * @param MailerService $mailerService
     * @return Response
     * @throws Exception
     */
    public function forgottenPassword(Request $request, MailerService $mailerService): Response
    {
        if($request->isMethod('POST')) {
            $email = $request->get('forgot_email');
            $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['email' => $email]);
            if($user === null) {
                $this->addFlash('warning', 'utilisateur non trouvé');
                return $this->redirectToRoute('account_register');
            }
            /**
             * @var $user User
             */
            $user->setTokenPassword($this->generateToken());
            $user->setCreatedTokenPasswordAt(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $token = $user->getTokenPassword();
            $email = $user->getEmail();
            $urlConfirm = $request->headers->get('host');
            $mailerService->sendForgotPassword($urlConfirm,$token, $email, 'forgotten_password.html.twig');
            $this->addFlash('success', 'Un mail vous a été envoyé pour réinitialiser votre mot de pass');

            return $this->redirectToRoute("account_login");
        }
        return $this->render('account/login.html.twig');
    }

    /**
     * @Route("/account/resetpasswword/{token}/{username}", name="reset_password")
     * @param Request $request
     * @param $token
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     */
    public function resetPassword(Request $request, $token, UserPasswordEncoderInterface $encoder): Response
    {
        $em = $this->getDoctrine()->getManager();
        $forgotPassword = new ForgotPassword();
        $form = $this->createForm(ForgotPasswordType::class, $forgotPassword);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $em->getRepository(User::class)->findOneBy(['tokenPassword' => $token]);
            if ($user === null) {
                $this->addFlash('not-user-exist', 'utilisateur non trouvé');
                return $this->redirectToRoute('account_register');
            }
            $user->setTokenPassword(null);
            $user->setCreatedTokenPasswordAt(null);
            $newPassword = $forgotPassword->getNewPassword();
            $hash = $encoder->encodePassword($user, $newPassword);

            $user->setHash($hash);
            $em->flush();
            return $this->redirectToRoute('account_login');
        }
        return $this->render('account/reset-password.html.twig', [
            'form' => $form->createView(),
            'categories_yes' => $this->categories_yes,

        ]);
    }

        /**
     * @Route("/delete/skill/{id}",name="delete_skill")
     * @IsGranted("ROLE_USER")
     * @param Skill $skill
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function deleteUserSkill(Skill $skill, EntityManagerInterface $manager)
    {

        $manager->remove($skill);
        $manager->flush();
        return $this->redirectToRoute('account_index');
    }

    /**
     *
     * @Route("/delete/langue/{id}",name="delete_langue")
     * @IsGranted("ROLE_USER")
     * @param Language $language
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function deleteUserLanguage(Language $language, EntityManagerInterface $manager)
    {

        $manager->remove($language);
        $manager->flush();
        return $this->redirectToRoute('account_index');
    }

    /**
     * Permet d'afficher et de traiter le formulaire de modification de profil
     *
     * @Route("/account/profile", name="account_profile")
     * @IsGranted("ROLE_USER")
     *
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @param FileUploader $fileUploader
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function profile(Request $request, UserPasswordEncoderInterface $encoder, FileUploader $fileUploader, EntityManagerInterface $manager)
    {
        $user = $this->getUser();
        $formProfil = $this->createForm(AccountType::class, $user);

        $formProfil->handleRequest($request);

        if ($formProfil->isSubmitted() && $formProfil->isValid()) {

            $image = $formProfil['picture']->getData();
            if (is_null($image) && is_null($user->getPicture())) {
                $user->setPicture('default-user.png');
            } else {
                if ($image) {
                    $adFileName = $fileUploader->upload($image);
                    $user->setPicture($adFileName);
                }
            }
            $manager->persist($user);
            $manager->flush();
            $this->addFlash(
                'success',
                'Votre modification a bien été prise en compte.'
            );
        }

        $passwordUpdate = new PasswordUpdate();
        $formPassword = $this->createForm(PasswordUpdateType::class, $passwordUpdate);

        $formPassword->handleRequest($request);

        if ($formPassword->isSubmitted() && $formPassword->isValid()) {
            //1. Vérifier que le oldPassword du formulaire soit le meme que le password de l'utilisateur
            if (!password_verify($passwordUpdate->getOldPassword(), $user->getHash())) {
                //Gérer l'erreur
                $formPassword->get('oldPassword')->addError(new FormError("Le mot de passe que vous avez tapé n'est pas votre mot de passe actuel !"));
            } else {
                $newPassword = $passwordUpdate->getNewPassword();
                $hash = $encoder->encodePassword($user, $newPassword);

                $user->setHash($hash);

                $manager->persist($user);
                $manager->flush();

                $this->addFlash(
                    'success',
                    "Votre mot de passe a bien été modifié !"
                );
                return $this->redirectToRoute('account_profile');
            }
        }
        return $this->render('account/profile.html.twig', [
            'formProfil' => $formProfil->createView(),
            'formPassword' => $formPassword->createView(),
            'categories_yes' => $this->categories_yes,

        ]);
    }
    /**
     * @return string
     * @throws Exception
     */
    private function generateToken()
    {
        return rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
    }

    /**
     * @Route("/account/{username}", name = "send_mail_for_activate_account")
     * @param Request $request
     * @param $username
     * @param MailerService $mailerService
     * @return JsonResponse
     */
    public function sendMailForActiveAccount(Request $request, $username, MailerService $mailerService) {

        $em = $this->getDoctrine()->getManager();
        if ($request->isXmlHttpRequest()){
            $user = $em->getRepository(User::class)->findOneBy(['email' => $username]);
            if ($user){
                $token = $user->getConfirmationToken();
                $email = $user->getEmail();

                $urlConfirm = $request->headers->get('host');
                $mailerService->sendToken($urlConfirm,$token, $email, 'confirmation_account.html.twig');

                $data = json_encode(array('username' => $username));
                return new JsonResponse($data, 200,[],true);
            }
        }
        return new JsonResponse(array(
            'type' => 'error',
            'message' => 'AJAX ONLY'
        ));
    }
}
