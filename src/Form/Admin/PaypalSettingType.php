<?php

namespace App\Form\Admin;

use App\Entity\Admin\PaypalSetting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaypalSettingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('enabled')
            ->add('email')
            ->add('currency')
            ->add('appClientId')
            ->add('AppClientSecret')
            ->add('paypalSandbox')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PaypalSetting::class,
        ]);
    }
}
