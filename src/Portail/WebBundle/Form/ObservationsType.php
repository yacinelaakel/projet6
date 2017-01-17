<?php

namespace Portail\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ObservationsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('dateObservation', DateType::class, array(
            'label' => "Date d'observation",
            'widget' => 'single_text',
            'input' => 'datetime',
            'format' => 'dd-MM-yyyy')
        )
        ->add('heureObservation', TimeType::class)
        ->add('longitude', NumberType::class, array(
            'required' => true,
            'scale' => 18,
            'attr' => array(
               'step' => 0.000000000000001,
               'placeholder' => 0.0001
            ))
        )
        ->add('latitude', NumberType::class, array(
            'required' => true,
            'scale' => 18,
            'attr' => array(
               'step' => 0.000000000000001,
               'placeholder' => 0.0001
            ))
        )
        ->add('nbIndividus', IntegerType::class, array(
            'attr' => array(
                'placeholder' => 1,
            ))
        )
        ->add('photo', FileType::class, ['required' => false])
        ->add('commentaire', TextareaType::class, array(
            'required' => false,
            'attr' => array(
                'placeholder' => 'Faites nous part de vos impressions sur cette observation...'
            ))
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Portail\WebBundle\Entity\Observations'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'portail_webbundle_observations';
    }


}
