<?php

namespace App\Form\Admin;

use App\Entity\Admin\GeneralSetting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GeneralSettingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('siteTitle')
            ->add('siteDescription')
            ->add('siteKeywords')
            ->add('siteAuthor')
            ->add('siteLogo')
            ->add('googleRecaptchaSiteKey')
            ->add('googleRecaptchaSecretKey')
            ->add('EnableKnowledgeBank')
            ->add('EnableMaintenanceMode')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GeneralSetting::class,
        ]);
    }
}
