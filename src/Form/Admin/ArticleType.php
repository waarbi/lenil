<?php

namespace App\Form\Admin;

use App\Entity\Admin\Article;
use App\Entity\Admin\ArticleCategory;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                'label' => 'Titre de l\'article',
                'attr' => [
                    'placeholder' => 'Entrer le titre de l\'article'
                ]
            ))
            ->add('status', ChoiceType::class, [
                'label' => 'Activer l\'article',
                'choices' => [
                    'Activer' => true,
                    'Désactiver' => false,
                ],
            ])
            ->add('articleCategory', EntityType::class, [
                'class' => ArticleCategory::class,
                'choice_label' => 'title',
                'placeholder' => 'Choisir une catégorie d\'article'
            ])
            ->add('content', CKEditorType::class, array(
                'label' => 'Contenu de l\'article',
                'config' => array(
                    'uiColor' => '#ffffff',
                    //...
                )
            ))
            ->add('topImage', FileType::class, array(
                'required' => false,
                'mapped' => false,
                'label' => 'Icon',
                'attr' => [
                    'placeholder' => 'Charger l\'image de l\'article '
                ]
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
