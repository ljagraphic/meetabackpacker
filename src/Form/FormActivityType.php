<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormActivityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder
            ->add('description', TextareaType::class)
            ->add('category', ChoiceType::class, array(
                'choices' =>[
                    'Culture' => 'culture',
                    'Pub/Nigth Club' => 'pub/nigthclub',
                    'Restaurant' => 'restaurant',
                    'Outdoor activity' => 'outdoor activity',
                    'Hotel/Hostel' => 'hotel/hostel',
                    'Curiosity' => 'curiosity',
                    'shopping' => 'shopping',
                    'Eco tourism' => 'eco tourism'
                    ]
            ))
            ->add('pictures', FileType::class)
            ->add('prices', MoneyType::class)
            ->add('tips', TextType::class)
            ->add('address', TextareaType::class)
            ->add('longitude', HiddenType::class)     
            ->add('latitude', HiddenType::class)     
            ->getForm()                  
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            //'data_class' => FormActivity::class,
        ]);
    }
}
