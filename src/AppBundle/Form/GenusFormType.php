<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GenusFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('speciesCount')
            ->add('FunFact');

    }

//    public function configureOptions(OptionsResolver $resolver)
//    {
//
//
//    }

//    public function getBlockPrefix()
//    {
//        return 'app_bundle_genus_form_type';
//    }
}
