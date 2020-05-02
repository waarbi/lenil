<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\DeliveryTime;
use App\Entity\Admin\ProposalSearchProperty;
use App\Entity\SousCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProposalSearchPropertyType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('deliveryTime', EntityType::class, [
                'class' => DeliveryTime::class,
                'choice_label' => 'name',
                'placeholder' => 'Filtrer par Délais de livraison',
                'label' => false,
                'required' => false,
            ])
            ->add('category', EntityType::class, [
                'placeholder' => 'Filtrer par Catégorie',
                'class' => Category::class,
                'choice_label' => 'title',
                'label' => false,
                'required' => false
            ])
            ->add('subcategory', EntityType::class, [
                'placeholder' => 'Filtrer par par sous catégorie',
                'class' => SousCategory::class,
                'choice_label' => 'title',
                'label' => false,
                'required' => false
            ])
            ->add('maxPrice', MoneyType::class, array(
                'label' => false,
                'required' => false,
                'currency' => false,
                'attr' => [
                    'placeholder' => "Filtrer par prix"
                ]))
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ProposalSearchProperty::class,
            'method' => 'get',
            'csrf_protection' => false
        ]);
    }
    public function getBlockPrefix()
    {
        return '';
    }
}
