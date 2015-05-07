<?php
namespace CommercialAds\AdvertiserBundle\Form\Extranet;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdvertiserType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name')
                ->add('description')
                ->add('street')
                ->add('number')
                ->add('floor')
                ->add('door')
                ->add('postalCode','text', array('required'=> false))
                ->add('phone')
                ->add('hours')
                ->add('image', 'file', array('required'=>false));
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class' => 'CommercialAds\AdvertiserBundle\Entity\Advertiser'));
    }
    
    public function getName() {
        return '';
    }
}
        
