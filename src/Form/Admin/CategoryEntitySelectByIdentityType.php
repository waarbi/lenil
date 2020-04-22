<?php


namespace App\Form\Admin;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryEntitySelectByIdentityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Categories', EntityType::class, [
            // Multiple selection allowed
            'multiple' => true,
            // Render as checkboxes
            'expanded' => true,
            // This field shows all the categories
            'class'    => Category::class,
            'mapped' => false,
            'required' => false
        ]);
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'      => null,
            'csrf_protection' => false
        ));
    }

}