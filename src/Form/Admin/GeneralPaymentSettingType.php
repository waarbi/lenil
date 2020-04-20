<?php

namespace App\Form\Admin;

use App\Entity\Admin\GeneralPaymentSetting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GeneralPaymentSettingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('priceFeaturedProposal')
            ->add('durationFeatured')
            ->add('commissionProcessing')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GeneralPaymentSetting::class,
        ]);
    }
}
