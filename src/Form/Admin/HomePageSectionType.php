<?php

namespace App\Form\Admin;

use App\Entity\Admin\HomePageSection;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HomePageSectionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('heading', TextType::class, array(
                'label' => 'Titre de la section',
                'attr' => [
                    'placeholder' => 'Entrer le titre de cette section'
                ]
            ))
            ->add('shortHeading', TextType::class, array(
                'label' => 'Petite description',
                'attr' => [
                    'placeholder' => 'Entrer la description'
                ]
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => HomePageSection::class,
        ]);
    }
}
