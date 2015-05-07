<?php
namespace CommercialAds\UserBundle\Form\Model;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Security\Core\Validator\Constraints as Assert;

class ChangePassword {
    
    /**
     * @Assert\UserPassword( message = "Contraseña actual invalida" )
     * @var type 
     */
    protected $oldPassword;
    
    
    protected $password;
    
    
    public function getOldPassword(){
        return $this->oldPassword;
    }
    
    public function setOldPassword($oldPassword){
         $this->oldPassword = $oldPassword;
         return $this;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function setPassword($password){
         $this->password = $password;
         return $this;
    }
}

?>
