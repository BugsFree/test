<?php

namespace MainBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class RegistrationFormType extends AbstractType


{
    

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          
             ->add('sexe', ChoiceType::class, array(
                    'choices' => array(
                        'homme' => 'homme',
                        'femme' => 'femme',
            )))
             ->add('nom')
                
                
    
->add('datenaissance',DateType::Class, array('widget' => 'single_text'))
    ;}

       
    
 public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\User',
        ));
    }

    public function getParent() {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix() {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName() {
        return $this->getBlockPrefix();
    }
}