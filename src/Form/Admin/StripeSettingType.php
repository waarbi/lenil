<?php

namespace App\Form\Admin;

use App\Entity\Admin\StripeSetting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StripeSettingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('enabled', ChoiceType::class, [
                'label' => 'Activer le paiement par Stripe',
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
            ])
            ->add('secretKey',TextType::class, array(
                'label' => 'App Secret key Stripe',
                'attr' => [
                    'placeholder' => 'Entrer la clé api secret stripe'
                ]
            ))
            ->add('publishableKey',TextType::class, array(
                'label' => 'PublishableKey',
                'attr' => [
                    'placeholder' => 'Entrer la clé publishableKey de Stripe'
                ]
            ))
            ->add('currency',TextType::class, array(
                'label' => 'Devis',
                'attr' => [
                    'placeholder' => 'Entrer la devis '
                ]
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => StripeSetting::class,
        ]);
    }
}
