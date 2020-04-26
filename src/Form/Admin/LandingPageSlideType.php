<?php

namespace App\Form\Admin;

use App\Entity\Admin\LandingPageSlide;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LandingPageSlideType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                'label' => 'Titre du slide',
                'attr' => [
                    'placeholder' => 'Entrer le titre du slide'
                ]
            ))
            ->add('imageName',FileType::class, array(
                'data_class' => null,
                'required'   => true,
                'label' => 'Image slide',
                'attr' => [
                    'placeholder' => 'Charger une image'
                ]
            ))
            ->add('isActivate')
            ->add('onHomePageAnonym',CheckboxType::class, array(
                'label' => 'Mettre sur la page d\'accueil du site',
                'required' => false
            ))
            ->add('onHomePageSeller', CheckboxType::class, array(
                'label' => 'Mettre sur la page d\'accueil du vendeur',
                'required' => false
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LandingPageSlide::class,
        ]);
    }
}
