<?php

namespace CommercialAds\AdvertiserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advertiser
 *
 * @ORM\Table(name="advertiser")
 * @ORM\Entity
 */
class Advertiser
{
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
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=60, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=50, nullable=true)
     */
    private $street;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @var integer
     *
     * @ORM\Column(name="floor", type="integer", nullable=true)
     */
    private $floor;

    /**
     * @var string
     *
     * @ORM\Column(name="door", type="string", length=10, nullable=true)
     */
    private $door;

    /**
     * @var integer
     *
     * @ORM\Column(name="postalCode", type="integer", nullable=true)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=15, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="hours", type="string", length=50, nullable=true)
     */
    private $hours;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="decimal", precision=18, scale=15, nullable=true)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="decimal", precision=18, scale=15, nullable=true)
     */
    private $lng;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=true)
     */
    private $image;

    /**
     * @var \City
     *
     * @ORM\ManyToOne(targetEntity="\CommercialAds\FilterBundle\Entity\City")
     */
    private $city;

    /**
     * @var \Subcategory
     *
     * @ORM\ManyToOne(targetEntity="\CommercialAds\FilterBundle\Entity\Subcategory")
     */
    private $subcategory;
    
    /**
     * @var \User
     *
     * @ORM\OneToOne(targetEntity="\CommercialAds\UserBundle\Entity\User")
     */
    private $user;

    /**
     *
     * @ORM\OneToMany(targetEntity="\CommercialAds\AdBundle\Entity\Ad", mappedBy="advertiser") 
     */
    private $ad;
    
    
    /**
     * Constructor
     */
    public function __construct(){
        $this->ad = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set name
     *
     * @param string $name
     * @return Negocios
     */
    public function setName($name)
    {
        $this->name = $name;
    
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
     * Set description
     *
     * @param string $description
     * @return Negocios
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Negocios
     */
    public function setStreet($street)
    {
        $this->street = $street;
    
        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Negocios
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set floor
     *
     * @param integer $floor
     * @return Negocios
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    
        return $this;
    }

    /**
     * Get floor
     *
     * @return integer 
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set door
     *
     * @param string $door
     * @return Negocios
     */
    public function setDoor($door)
    {
        $this->dep = $door;
    
        return $this;
    }

    /**
     * Get door
     *
     * @return string 
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * Set postalCode
     *
     * @param integer $postalCode
     * @return Negocios
     */
    public function setPostalcode($postalCode)
    {
        $this->postalCode = $postalCode;
    
        return $this;
    }

    /**
     * Get postalCode
     *
     * @return integer 
     */
    public function getPostalcode()
    {
        return $this->postalCode;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Negocios
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set hours
     *
     * @param string $hours
     * @return Negocios
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    
        return $this;
    }

    /**
     * Get hours
     *
     * @return string 
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return Negocios
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    
        return $this;
    }

    /**
     * Get lat
     *
     * @return string 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param string $lng
     * @return Negocios
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    
        return $this;
    }

    /**
     * Get lng
     *
     * @return string 
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Negocios
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set city
     *
     * @param \CommercialAds\FilterBundle\Entity\City $city
     * @return Negocios
     */
    public function setCity(\CommercialAds\FilterBundle\Entity\City $city = null)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return \CommercialAds\FilterBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set subcategory
     *
     * @param \CommercialAds\FilterBundle\Entity\Subcategory $subcategory
     * @return Negocios
     */
    public function setSubcategory(\CommercialAds\FilterBundle\Entity\Subcategory $subcategory = null)
    {
        $this->subcategory = $subcategory;
    
        return $this;
    }

    /**
     * Get subcategory
     *
     * @return \CommercialAds\FilterBundle\Entity\Subcategory 
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }
    
    /**
     * Set user
     *
     * @param \CommercialAds\UserBundle\Entity\User $user
     * @return Advertiser
     */
    public function setUser(\CommercialAds\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \CommercialAds\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * Add ad
     *
     * @param \CommercialAds\AdBundle\Entity\Ad $ad
     * @return Negocios
     */
    public function addAd(\CommercialAds\AdBundle\Entity\Ad $ad)
    {
        $this->ad[] = $ad;
    
        return $this;
    }
    
    /**
     * Remove ad
     *
     * @param \CommercialAds\AdBundle\Entity\Ad $ad
     */
    public function removeAd(\CommercialAds\AdBundle\Entity\Ad $ad)
    {
        $this->ad->removeElement($ad);
    }
    
    /**
     * Get ad
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAd()
    {
        return $this->ad;
    }

//    public function __toString() {
//        return $this->name;
//    }
}