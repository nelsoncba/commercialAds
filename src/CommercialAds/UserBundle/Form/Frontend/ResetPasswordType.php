<?php
namespace CommercialAds\UserBundle\Form\Frontend;

use \Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResetPasswordType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('password');
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class' => 'CommercialAds\UserBundle\Entity\User'));
    }
    
    public function getName() {
        return 'usuariotype';
    }
}

?>
