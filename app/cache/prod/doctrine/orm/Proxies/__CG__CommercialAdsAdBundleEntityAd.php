<?php

namespace Proxies\__CG__\CommercialAds\AdBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Ad extends \CommercialAds\AdBundle\Entity\Ad implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setPrice($price)
    {
        $this->__load();
        return parent::setPrice($price);
    }

    public function getPrice()
    {
        $this->__load();
        return parent::getPrice();
    }

    public function setTypePrice($typePrice)
    {
        $this->__load();
        return parent::setTypePrice($typePrice);
    }

    public function getTypePrice()
    {
        $this->__load();
        return parent::getTypePrice();
    }

    public function setEnabled($enabled)
    {
        $this->__load();
        return parent::setEnabled($enabled);
    }

    public function getEnabled()
    {
        $this->__load();
        return parent::getEnabled();
    }

    public function setSlug($slug)
    {
        $this->__load();
        return parent::setSlug($slug);
    }

    public function getSlug()
    {
        $this->__load();
        return parent::getSlug();
    }

    public function setCreatedAt()
    {
        $this->__load();
        return parent::setCreatedAt();
    }

    public function getCreatedAt()
    {
        $this->__load();
        return parent::getCreatedAt();
    }

    public function setExpiredAt($expired_at)
    {
        $this->__load();
        return parent::setExpiredAt($expired_at);
    }

    public function getExpiredAt()
    {
        $this->__load();
        return parent::getExpiredAt();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setAdvertiser(\CommercialAds\AdvertiserBundle\Entity\Advertiser $advertiser = NULL)
    {
        $this->__load();
        return parent::setAdvertiser($advertiser);
    }

    public function getAdvertiser()
    {
        $this->__load();
        return parent::getAdvertiser();
    }

    public function setCity(\CommercialAds\FilterBundle\Entity\City $city = NULL)
    {
        $this->__load();
        return parent::setCity($city);
    }

    public function getCity()
    {
        $this->__load();
        return parent::getCity();
    }

    public function setSubcategory(\CommercialAds\FilterBundle\Entity\Subcategory $subcategory = NULL)
    {
        $this->__load();
        return parent::setSubcategory($subcategory);
    }

    public function getSubcategory()
    {
        $this->__load();
        return parent::getSubcategory();
    }

    public function setImage(\CommercialAds\AdBundle\Entity\Image $image = NULL)
    {
        $this->__load();
        return parent::setImage($image);
    }

    public function getImage()
    {
        $this->__load();
        return parent::getImage();
    }

    public function generateExpireDate()
    {
        $this->__load();
        return parent::generateExpireDate();
    }

    public function updateLuceneIndex()
    {
        $this->__load();
        return parent::updateLuceneIndex();
    }

    public function deleteLuceneIndex()
    {
        $this->__load();
        return parent::deleteLuceneIndex();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'title', 'description', 'price', 'typePrice', 'enabled', 'slug', 'created_at', 'expired_at', 'type', 'image', 'advertiser', 'subcategory', 'city');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}