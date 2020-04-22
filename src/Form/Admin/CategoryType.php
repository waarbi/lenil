<?php

namespace App\Form\Admin;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                'label' => 'Titre',
                'attr' => [
                    'placeholder' => 'Entrer le titre de la catégorie'
                ]
            ))
            ->add('description', TextareaType::class, array(
                'label' => 'Description',
                'attr' => [
                    'placeholder' => 'Entrer la description de la catégorie'
                ]
            ))
            ->add('image', FileType::class, array(
                'required' => false,
                'mapped' => false,
                'label' => 'Icon',
                'attr' => [
                    'placeholder' => 'Charger l\'icone de la catégorie '
                ]
            ))
            ->add('featured',ChoiceType::class, [
                'label' => 'Featured',
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
            ] )
            ->add('cardPicture', FileType::class, array(
                'mapped' => false,
                'required' => false,
                'label' => 'image carte',
                'attr' => [
                    'placeholder' => 'Charger image de la carte'
                ]
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}
