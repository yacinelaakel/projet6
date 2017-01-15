<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 15/01/2017
 * Time: 21:37
 */
namespace Portail\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('surname')
            ->add('naissance')
            ->add('ville')
        ;

    }
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'portail_user_inscription';
    }


}