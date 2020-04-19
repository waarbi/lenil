<?php

namespace App\Form;

use App\Entity\DeliveryTime;
use App\Entity\Offer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder->add('deliveryTime', EntityType::class, [
                'class' => DeliveryTime::class,
                'choice_label' => 'name',
                'label' => 'Délais de livraison'
            ]);
             $builder->add('budget',MoneyType::class,array(
                 'label' => 'Budget',
                 'attr' => [
                     'placeholder' => "Budget minimum 5 €"
                 ]
             ))->add('description',TextareaType::class,array(
                 'label' => 'Description',
                 'attr' => [
                     'placeholder' => "Décrire votre offre de service"
                 ]
             ));
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Offer::class
        ]);
    }
}
