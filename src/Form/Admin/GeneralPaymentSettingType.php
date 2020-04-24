<?php

namespace App\Form\Admin;

use App\Entity\Admin\GeneralPaymentSetting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GeneralPaymentSettingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('priceFeaturedProposal',MoneyType::class, [
                'label' => 'Frais d\'inscription service en vedette',
                'currency' => '',
                'attr' => [
                    'placeholder' => 'Entrer le prix'
                ]
            ])
            ->add('durationFeatured',IntegerType::class, [
                'label' => 'Durée de l\'annonce en vedette',
                'attr' => [
                    'placeholder' => 'Entrer la durée : 1 Minimum'
                ]
            ])
            ->add('commissionProcessing',MoneyType::class, [
                'label' => 'Frais de traitement',
                'currency' => '',
                'attr' => [
                    'placeholder' => 'Entrer le prix'
                ]
            ])

    ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GeneralPaymentSetting::class,
        ]);
    }
}
