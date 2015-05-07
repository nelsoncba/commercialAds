<?php

namespace CommercialAds\AdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 * 
 * @ORM\Table(name="image")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Image {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="path1", type="string", length=200, nullable=true)
     */
    private $path1;
    
    /**
     * @var string
     *
     * @ORM\Column(name="path2", type="string", length=200, nullable=true)
     */
    private $path2;
    
    /**
     * @var string
     *
     * @ORM\Column(name="path3", type="string", length=200, nullable=true)
     */
    private $path3;
    
    /**
     * @var string
     *
     * @ORM\Column(name="path4", type="string", length=200, nullable=true)
     */
    private $path4;
    
    /**
     * @var string
     *
     * @ORM\Column(name="path5", type="string", length=200, nullable=true)
     */
    private $path5;
    
    /**
     * @var \Ads
     *
     * @ORM\OneToOne(targetEntity="\CommercialAds\AdBundle\Entity\Ad", inversedBy="image", cascade={"persist"})
     */
    private $ad;
    
   
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get path1
     *
     * @return string 
     */
    public function getPath1()
    {
        return $this->path1;
    }

    /**
     * Set pathfirst
     *
     * @param string $path1
     * @return Image
     */
    public function setPath1($path)
    {   
        $this->path1 = $path;
        
        return $this;
    }
    
    /**
     * Get path2
     *
     * @return string 
     */
    public function getPath2()
    {
        return $this->path2;
    }

    /**
     * Set path2
     *
     * @param string $path2
     * @return Image
     */
    public function setPath2($path)
    {   
        $this->path2 = $path;
        return $this;
    }
    
    /**
     * Get path3
     *
     * @return string 
     */
    public function getPath3()
    {
        return $this->path3;
    }

    /**
     * Set path3
     *
     * @param string $path3
     * @return Image
     */
    public function setPath3($path)
    {   
        $this->path3 = $path;
        return $this;
    }
    
    /**
     * Get path4
     *
     * @return string 
     */
    public function getPath4()
    {
        return $this->path4;
    }

    /**
     * Set path4
     *
     * @param string $path4
     * @return Image
     */
    public function setPath4($path)
    {   
        $this->path4 = $path;
        return $this;
    }
    
    /**
     * Get path5
     *
     * @return string 
     */
    public function getPath5()
    {
        return $this->path5;
    }

    /**
     * Set path5
     *
     * @param string $path5
     * @return Image
     */
    public function setPath5($path)
    {   
        $this->path5 = $path;
        return $this;
    }
    
    /**
     * Set ad
     *
     * @param \CommercialAds\AdBundle\Entity\Ad $ad
     * @return Image
     */
    public function setAd(\CommercialAds\AdBundle\Entity\Ad $ad = null)
    {
        $this->ad = $ad;
    
        return $this;
    }

    /**
     * Get ad
     *
     * @return \CommercialAds\AdBundle\Entity\Ad
     */
    public function getAd()
    {
        return $this->ad;
    }
    
    public function uploadImg($key,$path){
        $destino = __DIR__.'/../../../../web/uploads/images';
        $nameFile = uniqid().'_'.$path->getClientOriginalName();
        $path->move($destino, $nameFile);
        if ($key == 1)
            $this->setPath1($nameFile);
        elseif ($key == 2)
            $this->setPath2 ($nameFile);
        elseif ($key == 3)
            $this->setPath3 ($nameFile);
        elseif ($key == 4)
            $this->setPath4 ($nameFile);
        elseif ($key == 5)
            $this->setPath5 ($nameFile);
    }
    
    /**
     * @ORM\PreRemove
     */
    public function removeFile(){
         if($this->getPath1()){
                $file1 = __DIR__.'/../../../../web/uploads/images/'.$this->path1;
                unlink ($file1);
         }
         if($this->getPath2()){
                $file2 = __DIR__.'/../../../../web/uploads/images/'.$this->path2;
                unlink ($file2);
         }
         if($this->getPath3()){
                $file3 = __DIR__.'/../../../../web/uploads/images/'.$this->path3;
                unlink ($file3);
         }
         if($this->getPath4()){
                $file4 = __DIR__.'/../../../../web/uploads/images/'.$this->path4;
                unlink ($file4);
         }
         if($this->getPath5()){
                $file5 = __DIR__.'/../../../../web/uploads/images/'.$this->path5;
                unlink ($file5);
         }
    }
    
}

?>
