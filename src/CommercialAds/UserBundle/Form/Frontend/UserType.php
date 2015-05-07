<?php
namespace CommercialAds\UserBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('user')
                ->add('email')
                ->add('password')
                ->add('type', 'choice', array('choices' => array(0 => 'Anunciante', 1 => 'Usuario')));
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class' => 'CommercialAds\UserBundle\Entity\User'));
    }
    
    public function getName() {
        return 'usuariotype';
    }
}
        
