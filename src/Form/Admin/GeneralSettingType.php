<?php

namespace App\Form\Admin;

use App\Entity\Admin\GeneralSetting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GeneralSettingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('siteTitle', TextType::class, array(
                'label' => 'Titre du site',
                'attr' => [
                    'placeholder' => 'Entrer le titre du site'
                ]
            ))
            ->add('siteDescription', TextareaType::class, array(
                'label' => 'Description',
                'attr' => [
                    'placeholder' => 'Entrer la description du site'
                ]
            ))
            ->add('siteKeywords', TextType::class, array(
                'label' => 'Mots clés',
                'attr' => [
                    'placeholder' => 'Entrer les mots clés du site pour le référencement'
                ]
            ))->add('siteEmail', EmailType::class, array(
                'label' => 'Email du site',
                'attr' => [
                    'placeholder' => 'Entrer l\'email du site'
                ]
            ))
            ->add('siteAuthor', TextType::class, array(
                'label' => 'Auteur',
                'attr' => [
                    'placeholder' => 'Entrer le nom de l\'auteur du site'
                ]
            ))
            ->add('googleRecaptchaSiteKey', TextType::class, array(
                'label' => 'Google Recaptcha Site Key',
                'attr' => [
                    'placeholder' => 'Entrer la clé api Google Recaptcha du site'
                ]
            ))
            ->add('googleRecaptchaSecretKey', TextType::class, array(
                'label' => 'Google Recaptcha Secret Key',
                'attr' => [
                    'placeholder' => 'Entrer la clé api secrète Google Recaptcha du site'
                ]
            ))
            ->add('EnableKnowledgeBank', ChoiceType::class, [
                'label' => 'Activer le guide',
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
            ])
            ->add('EnableMaintenanceMode', ChoiceType::class, [
                'label' => 'Activer le mode maintenance',
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GeneralSetting::class,
        ]);
    }
}
