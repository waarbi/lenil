<?php

namespace App\Form\Admin;

use App\Entity\Admin\ArticleCategory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class, array(
                'label' => 'Titre de la catégorie d\'article',
                'attr' => [
                    'placeholder' => 'Entrer le titre de la catégorie d\'article'
                ]
            ))
            ->add('position',ChoiceType::class, [
                'label' => 'Position',
                'choices' => [
                    'Gauche' => true,
                    'Droit' => false,
                ],
                'expanded' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ArticleCategory::class,
        ]);
    }
}
