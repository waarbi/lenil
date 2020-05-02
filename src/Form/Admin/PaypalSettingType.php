<?php

namespace App\Form\Admin;

use App\Entity\Admin\PaypalSetting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaypalSettingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('enabled', ChoiceType::class, [
                'label' => 'Activer le paiement par Paypal',
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
            ])
            ->add('email', EmailType::class, array(
                'label' => 'Email Paypal',
                'attr' => [
                    'placeholder' => 'Entrer l\'email du compte paypal'
                ]
            ))
            ->add('currency',TextType::class, array(
                'label' => 'Devis',
                'attr' => [
                    'placeholder' => 'Entrer la devis '
                ]
            ))
            ->add('appClientId',TextType::class, array(
                'label' => 'App Client Id Paypal',
                'attr' => [
                    'placeholder' => 'Entrer la clé api paypal du site'
                ]
            ))
            ->add('AppClientSecret',TextType::class, array(
                'label' => 'App Client Secret Key',
                'attr' => [
                    'placeholder' => 'Entrer la clé api secrète paypal'
                ]
            ))
            ->add('paypalSandbox',ChoiceType::class, [
                'label' => 'Activer le sandbox Paypal',
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
                'expanded' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PaypalSetting::class,
        ]);
    }
}
