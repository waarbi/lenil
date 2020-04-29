<?php

namespace App\Form\Admin;

use App\Entity\Admin\Article;
use App\Entity\Admin\ArticleCategory;
use App\Entity\Admin\Term;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TermType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                'label' => 'Titre de la politique',
                'attr' => [
                    'placeholder' => 'Entrer le titre'
                ]
            ))
            ->add('content', CKEditorType::class, array(
                'label' => 'Contenu terme',
                'config' => array(
                    'uiColor' => '#6fc2de',
                    //...
                )
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Term::class,
        ]);
    }
}
