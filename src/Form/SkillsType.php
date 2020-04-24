<?php

namespace App\Form;

use App\Entity\Level;
use App\Entity\Skill;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SkillsType extends AbstractType
{
    private $manager;
    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', ChoiceType::class, array(
                'choices'  => $this->buildChoices($this->manager),
                'placeholder' => 'Choisissez une compétence',
            ))
            ->add('level', EntityType::class, [
                'class' => Level::class,
                'choice_label' => 'name',
                'placeholder' => 'Choisissez un niveau'
            ])

        ;
    }
    protected function buildChoices(EntityManagerInterface $manager) {
        $choices          = [];
        $skillsNames = $manager->getRepository('App\Entity\SkillsName')->findAll();
        foreach ($skillsNames as $skillsName) {
            $choices[$skillsName->getName()] =  $skillsName->getName();
        }
        return $choices;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Skill::class,
        ]);
    }
}
