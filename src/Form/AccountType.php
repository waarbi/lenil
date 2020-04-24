<?php

namespace App\Form;

use App\Entity\Pays;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccountType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastName', TextType::class, $this->getConfiguration("Nom", "Votre Nom"))
            ->add('firstName',TextType::class, $this->getConfiguration("Prénom", "Votre prénom"))
            ->add('email',EmailType::class, $this->getConfiguration("Email", "Votre adresse email"))
            ->add('pays', EntityType::class, [
                // looks for choices from this entity
                'class' => Pays::class,
                'choice_label' => 'name',
                'placeholder' => 'Choisissez un pays',
                'label' => 'Pays'
            ])
            ->add('picture',FileType::class, array(
                'data_class' => null,
                'required'   => false,
                'label' => 'Photo de profil',
                'attr' => [
                    'placeholder' => 'Charger votre photo Avatar'
                ]
            ))
            ->add('description',TextareaType::class, $this->getConfiguration("Description détaillée", "C'est le moment de vous présenter en détails !"))


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
