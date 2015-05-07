<?php

namespace CommercialAds\FilterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subcategory
 *
 * @ORM\Table(name="subcategory")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="CommercialAds\FilterBundle\Repository\SubcategoryRepository")
 */
class Subcategory
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
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=100, nullable=true)
     */
    private $slug;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="CommercialAds\FilterBundle\Entity\Category")
     */
    private $category;
    
    
    public function __construct() {
        $this->category = new ArrayCollection();
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
     * Set subcategory
     *
     * @param string $name
     * @return Subcategory
     */
    public function setName($name)
    {
        $this->subcategory = $name;
    
        return $this;
    }

    /**
     * Get subcategory
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
     * @return Subcategory
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
     * Set category
     *
     * @param \CommercialAds\FilterBundle\Entity\Category $category
     * @return Subcategory
     */
    public function setCategory(\CommercialAds\FilterBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \CommercialAds\FilterBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Subcategory
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }
    
    public function __toString() {
        return $this->getName();
    }
 
}