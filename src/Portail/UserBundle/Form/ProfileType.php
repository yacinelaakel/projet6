<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 30/01/2017
 * Time: 21:17
 */

namespace Portail\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Nom'))
            ->add('surname', TextType::class, array('label' => 'Prénom'))
            ->add('dateboth', DateType::class, array(
                'label' => 'Date de Naissance',
                'days' => range(1, 31),
                'months' => range(1, 12),
                'years' => range(1916, date('Y')),
                'format' => 'dd/MM/yyyy'))
            ->add('city', TextType::class, array('label' => 'Ville'))
            ->add('job', TextType::class,array('label' => 'Profession'))


        ;
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_profile';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}