<?php

namespace App\Controller;

use App\Entity\Language;
use App\Entity\Skill;
use App\Entity\User;
use App\Form\AccountType;
use App\Entity\PasswordUpdate;
use App\Form\LangueType;
use App\Form\RegistrationType;
use App\Form\PasswordUpdateType;
use App\Form\SkillsType;
use App\Services\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountController extends AbstractController
{
    /**
     * Permet d'afficher et de gérer le formulaire de connexion
     *
     * @Route("/login", name="account_login")
     *
     * @return Response
     */
    public function login(AuthenticationUtils $utils, EntityManagerInterface $manager)
    {
        $error =  $utils->getLastAuthenticationError();
        $username =$utils->getLastUsername();
        $categories_yes = $manager->getRepository('App\Entity\Category')->findBy(array('featured' => true));


        return $this->render('account/login.html.twig', [
            'hasError' => $error != null,
            'username' => $username,
            'categories_yes' => $categories_yes,


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
     * @param FileUploader $fileUploader
     * @param EntityManagerInterface $manager
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     */
    public function register(Request $request, FileUploader $fileUploader  ,EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $registrationForm = $this->createForm(RegistrationType::class, $user);
        $categories_yes = $manager->getRepository('App\Entity\Category')->findBy(array('featured' => true));

        $registrationForm->handleRequest($request);

        if ($registrationForm->isSubmitted()&& $registrationForm->isValid()){
            $image = $registrationForm['picture']->getData();
            if(is_null($image)){
                $user->setPicture('default-user.png');
            }else{
                if ($image) {
                    $adFileName = $fileUploader->upload($image);
                    $user->setPicture($adFileName);
                }
            }
            $hash = $encoder->encodePassword($user,$user->getHash());
            $user->setHash($hash);

            $manager->persist($user);
            $manager->flush();

            $this->addFlash(
                'success',
                "Votre compte a bien été créé ! Vous pouvez maintenant vous connectez !"
            );
            return $this->redirectToRoute("account_login");
        }

        return $this->render('account/registration.html.twig', [
            'registrationForm'=> $registrationForm->createView(),
            'categories_yes' => $categories_yes,

        ]);
    }

    /**
     * Permet d'afficher et de traiter le formulaire de modification de profil
     *
     * @Route("/account/profile", name="account_profile")
     * @IsGranted("ROLE_USER")
     *
     * @return Response
     */
    public function profile(Request $request, EntityManagerInterface $manager) {
        $user = $this->getUser();
        $form = $this->createForm(AccountType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

          $manager->persist($user);
          $manager->flush();

          $this->addFlash(
            'success',
            "Les données du profils ont été enregistrées avec succés !"
        );
        }

       return $this->render('account/profile.html.twig', [
             'form'=> $form->createView()
       ]);
    }

    /**
     * Permet de modifier un mot de passe
     *
     * @Route("/account/password-update", name="account_password")
     * @IsGranted("ROLE_USER")
     *
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @param ObjectManager $manager
     * @return Response
     */
    public function updatePassword(Request $request, UserPasswordEncoderInterface $encoder, ObjectManager $manager) {
        $passwordUpdate = new PasswordUpdate();

        $user = $this->getUser();

        $form = $this->createForm(PasswordUpdateType::class, $passwordUpdate);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
          //1. Vérifier que le oldPassword du formulaire soit le meme que le password de l'utilisateur
          if(!password_verify($passwordUpdate->getOldPassword(), $user->getHash())){
           //Gérer l'erreur
           $form->get('oldPassword')->addError(new FormError("Le mot de passe que vous avez tapé n'est pas votre mot de passe actuel !"));
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
              return $this->redirectToRoute('homepage');
          }
          
        }
       

       return $this->render('account/password.html.twig',[
           'form' => $form->createView()
       ]);
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
    public function myAccount(EntityManagerInterface $manager, Request $request){
        $categories_yes = $manager->getRepository('App\Entity\Category')->findBy(array('featured' => true));
        $skill = new Skill();
        $formSkill = $this->createForm(SkillsType::class, $skill);
        $formSkill->handleRequest($request);


        if($formSkill->isSubmitted() && $formSkill->isValid()){
            $skill->addUser($this->getUser());
            $this->getUser()->addSkill($skill);
            $manager->persist($skill);
            $manager->flush();
        }

        $langue = new Language();
        $formLanguage = $this->createForm(LangueType::class, $langue);
        $formLanguage->handleRequest($request);

        if($formLanguage->isSubmitted() && $formLanguage->isValid()){
            $langue->addUser($this->getUser());
            $this->getUser()->addLanguage($langue);
            $manager->persist($langue);
            $manager->flush();
        }


        return $this->render('seller/index.html.twig', [
             'user' => $this->getUser(),
             'categories_yes' => $categories_yes,
             'formSkill' => $formSkill->createView(),
             'formLanguage' => $formLanguage->createView()

        ]);
    }

    /**
     * @Route("/delete/skill/{id}",name="delete_skill")
     * @IsGranted("ROLE_USER")
     * @param Skill $skill
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function deleteUserSkill(Skill $skill,EntityManagerInterface $manager){

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
    public function deleteUserLanguage(Language $language,EntityManagerInterface $manager){

        $manager->remove($language);
        $manager->flush();
        return $this->redirectToRoute('account_index');
    }
}
