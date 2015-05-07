<?php
namespace CommercialAds\UserBundle\Form\Frontend;

use \Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResetPassDefaultType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('oldPassword', 'password')
                ->add('password', 'password');
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class' => 'CommercialAds\UserBundle\Form\Model\ChangePassword'));
    }
    
    public function getName() {
        return 'usuariotype';
    }
}

?>
