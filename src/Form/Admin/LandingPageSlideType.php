<?php

namespace App\Form\Admin;

use App\Entity\Admin\LandingPageSlide;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LandingPageSlide::class,
        ]);
    }
}
