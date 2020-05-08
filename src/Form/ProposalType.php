<?php


namespace App\Form;

use App\Entity\Category;
use App\Entity\DeliveryTime;
use App\Entity\Proposal;
use App\Entity\SousCategory;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ProposalType extends AbstractType
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('title', TextType::class,
                [
                    'required' => true,
                    'label' => 'Titre',
                    'attr' => ['class' => 'form-control', 'autofocus' =>true]
                ]
            )
            ->add('description', TextareaType::class,
                [
                    'label' => 'Description',
                    'required' => false,
                    'attr' => ['class' => 'form-control']
                ]
            )
            ->add('price', NumberType::class,
                [
                    'label' => 'Prix',
                    'required' => true,
                    'attr' => ['class' => 'form-control' , 'placeholder' => 'Renseigner le prix du service svp!']
                ]
            )
            ->add('deliveryTime', EntityType::class, [
                'class' => DeliveryTime::class,
                'expanded' => true,
                'choice_label' => 'name',



            ]);
        $builder->addEventListener(FormEvents::PRE_SET_DATA, array($this, 'onPreSetData'));
        $builder->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));



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
            $repoSousCat = $this->em->getRepository(SousCategory::class);

            $sousCategories = $repoSousCat->createQueryBuilder("q")
                ->where("q.category = :catid")
                ->setParameter("catid", $category->getId())
                ->getQuery()
                ->getResult();
        }
        // Add the subCategiries field with the properly data
        $form->add('subcategory', EntityType::class, array(
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
        $category = $this->em->getRepository(Category::class)->find($data['category']);

        $this->addElements($form, $category);
    }

    function onPreSetData(FormEvent $event)
    {
        $proposals = $event->getData();
        $form = $event->getForm();
        // When you create a new person, the City is always empty
        $cat = $proposals->getCategory() ? $proposals->getCategory() : null;
        $this->addElements($form, $cat);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Proposal::class
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_proposal';
    }
}