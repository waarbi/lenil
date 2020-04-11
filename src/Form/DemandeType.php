<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\DeliveryTime;
use App\Entity\Demande;
use App\Entity\SousCategory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityManagerInterface;


class DemandeType extends AbstractType
{
    private $em;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('title')
            ->add('description');

        // 3. Add 2 event listeners for the form
        $builder->addEventListener(FormEvents::PRE_SET_DATA, array($this, 'onPreSetData'));
        $builder->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));

        $builder->add('deliveryTime', EntityType::class, [
            'class' => DeliveryTime::class,
            'choice_label' => 'name',
            'expanded' => true,

        ]);
        $builder->add('budget');
    }

    protected function addElements(FormInterface $form, Category $category = null)
    {
        // 4. Add the province element
        $form->add('category', EntityType::class, array(
            'required' => true,
            'data' => $category,
            'placeholder' => 'Choisir une catégorie...',
            'class' => Category::class,
        ));
        // sousCategory empty, unless there is a selected Category (Edit View)
        $sousCategories = array();

        // If there is a city stored in the Category entity, load the sousCategory of it
        if ($category) {
            // Fetch sousCatgories of the Category if there's a selected category
            $repoSousCat = $this->em->getRepository('App\Entity\SousCategory');

            $sousCategories = $repoSousCat->createQueryBuilder("q")
                ->where("q.category = :catid")
                ->setParameter("catid", $category->getId())
                ->getQuery()
                ->getResult();
        }
        // Add the subCategiries field with the properly data
        $form->add('sousCategory', EntityType::class, array(
            'required' => true,
            'placeholder' => 'Choisir une sous catégorie ...',
            'class' => SousCategory::class,
            'choices' => $sousCategories
        ));
    }

    function onPreSubmit(FormEvent $event)
    {
        $form = $event->getForm();
        $data = $event->getData();

        // Search for selected City and convert it into an Entity
        $category = $this->em->getRepository('App\Entity\Category')->find($data['category']);

        $this->addElements($form, $category);
    }

    function onPreSetData(FormEvent $event)
    {
        $demand = $event->getData();
        $form = $event->getForm();
        // When you create a new person, the City is always empty
        $cat = $demand->getCategory() ? $demand->getCategory() : null;
        $this->addElements($form, $cat);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Demande::class
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_demande';
    }
}
