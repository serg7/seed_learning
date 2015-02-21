<?php

namespace Learning\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('roles', 'choice', array(
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'ROLE_USER' => 'ROLE_USER',
                    'ROLE_TUTOR' => 'ROLE_TUTOR',
                    'ROLE_ADMIN' => 'ROLE_ADMIN'
                )
            ))
            ->add('save', 'submit', array('label' => 'Save'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'Learning\UserBundle\Entity\Group'
            )
        );
    }

    public function getName()
    {
        return 'group';
    }
}