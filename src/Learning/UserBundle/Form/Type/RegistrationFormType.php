<?php

namespace Learning\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email',
                array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle',
                    'attr' => array('class' => 'form-control'
                    ),
                    'invalid_message' => 'Please enter valid email'
                )
            )
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle',
                'attr' => array('class' => 'form-control'
                )
                )
            )
            ->add('firstName', 'text',
               array('required' => false,
                     'label'    => 'First name',
                     'attr' => array(
                       'class'    => 'form-control'
                     ),
                   'invalid_message' => 'Please enter valid first name'
               )
            )
            ->add('lastName', 'text',
                array('required' => false,
                    'label'    => 'Last name',
                    'attr' => array(
                        'class'    => 'form-control'
                    ),
                    'invalid_message' => 'Please enter valid last name'
                )
            )
           /* ->add('roles', 'choice', array(
              'label' => 'Role',
              'choices' => array(
                  'ROLE_USER' => 'User',
                  'ROLE_TUTOR' => 'Tutor'
              ),
              //'multiple' => true,
              //'expanded' => true,
              'required' => 'true',
              'empty_value' => 'Select role',

            ))*/
            ->add('plainPassword', 'repeated', array(

                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password',
                    'attr' => array('class' => 'form-control')
                ),
                'second_options' => array('label' => 'form.password_confirmation',
                    'attr' => array('class' => 'form-control')
                ),
                'invalid_message' => 'fos_user.password.mismatch'
            ))
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'learning_user_registration';
    }
}
