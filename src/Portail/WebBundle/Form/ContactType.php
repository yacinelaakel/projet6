<?php

namespace Portail\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Votre nom',
            ))
        )
        ->add('prenom', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Votre prénom',
            ))
        )
        ->add('email', EmailType::class, array(
            'attr' => array(
                'placeholder' => 'Email',
            ))
        )
        ->add('objet', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Objet',
            ))
        )
        ->add('message', TextareaType::class, array(
            'attr' => array(
                'placeholder' => 'Message',
            ))
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Portail\WebBundle\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'portail_webbundle_contact';
    }


}
