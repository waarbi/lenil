<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname',TextType::class, array(
                'label' => 'Prénom',
                'attr' => [
                    'placeholder' => 'Saisir votre prénom'
                ]
            ))
            ->add('lastname',TextType::class,  array(
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Saisir votre nom'
                ]
            ))
            ->add('phone', TextType::class, array(
                'label' => 'Tél',
                'attr' => [
                    'placeholder' => 'Saisir votre numéro de téléphone'
                ]
            ))
            ->add('email', TextType::class,  array(
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'Saisir votre email'
                ]
            ))
            ->add('message', TextareaType::class,  array(
                'label' => 'Message',
                'attr' => [
                    'placeholder' => 'Décrire votre message'
                ]
            ))
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
