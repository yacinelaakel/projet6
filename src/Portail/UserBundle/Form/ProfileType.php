<?php

namespace Portail\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ProfileType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class)
            ->add('nom', TextType::class)
            ->add('datedenaissance', BirthdayType::class, array(
                'label' => 'Date de Naissance',
                'days' => range(1, 31),
                'months' => range(1, 12),
                'years' => range(1916, date('Y')),
                'format' => 'dd/MM/yyyy'))
            ->add('profession', TextType::class)
            ->add('ville', TextType::class)
            ->add('conditiongenerale', CheckboxType::class, array(
                'required' => false,
                'label' => 'J accepte les conditions générales d utilisation'
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'CREER MON COMPTE', 'attr' => ['class' => 'center-block btn btn-success'],))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Portail\UserBundle\Entity\Profile'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'portail_userbundle_profile';
    }


}
