<?php

namespace CommercialAds\FilterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity(repositoryClass="CommercialAds\FilterBundle\Repository\CityRepository")
 */
class City
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=100, nullable=true)
     */
    private $slug;

    /**
     * @var \Region
     *
     * @ORM\ManyToOne(targetEntity="CommercialAds\FilterBundle\Entity\Region")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     * })
     */
    private $region;



    /**
     * Get idcity
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return City
     */
    public function setName($name)
    {
        $this->city = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return City
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set region
     *
     * @param \CommercialAds\FilterBundle\Entity\Region $region
     * @return City
     */
    public function setRegion(\CommercialAds\FilterBundle\Entity\Region $region = null)
    {
        $this->region = $region;
    
        return $this;
    }

    /**
     * Get region
     *
     * @return \CommercialAds\FilterBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }
    
//    public function __toString()
//    {
//        return $this->getRegion();
//    }

    /**
     * Set idcity
     *
     * @param integer $idcity
     * @return City
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }
    
    public function __toString(){
        return $this->getName();
    }
}