<?php 

namespace CommercialAds\AdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CommercialAds\AdBundle\Util\Util;
/**
 * Ad
 *
 * @ORM\Table(name="ad")
 * @ORM\Entity(repositoryClass="CommercialAds\AdBundle\Repository\AdRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Ad
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
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=true)
     */
    private $description;

    /**
     * @var decimal
     *
     * @ORM\Column(name="price", type="decimal", nullable=true)
     */
    private $price;
    
    /**
     * @var string
     *
     * @ORM\Column(name="typePrice", type="string", nullable=true)
     */
    private $typePrice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var \Image 
     * 
     * @ORM\OneToOne(targetEntity="\CommercialAds\AdBundle\Entity\Image", cascade={"persist", "remove"})
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=100, nullable=true)
     */
    private $slug;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expired_at", type="datetime", nullable=false)
     */
    private $expired_at;
    
    /**
     * @var \boolean
     *
     * @ORM\Column(name="type", type="boolean")
     */
    private $type;

    /**
     * @var \Advertiser
     *
     * @ORM\ManyToOne(targetEntity="\CommercialAds\AdvertiserBundle\Entity\Advertiser", inversedBy="ad")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="advertiser_id", referencedColumnName="id")
     * })
     */
    private $advertiser;
    
    /**
     * @var \Category 
     * 
     * @ORM\ManyToOne(targetEntity="\CommercialAds\FilterBundle\Entity\Category", inversedBy="ad") 
     */
    private $category;
            
    /**
     * @var \Subcategory
     *
     * @ORM\ManyToOne(targetEntity="\CommercialAds\FilterBundle\Entity\Subcategory", inversedBy="ad")
     */
    private $subcategory;
    
    /**
     * @var \Region
     * 
     * @ORM\ManyToOne(targetEntity="\CommercialAds\FilterBundle\Entity\Region", inversedBy="ad")
     */
    private $region;
    
    /**
     * @var \City
     *
     * @ORM\ManyToOne(targetEntity="\CommercialAds\FilterBundle\Entity\City", inversedBy="ad")
     */
    private $city;
    
    /**
     * Get idoferta
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Ad
     */
    public function setTitle($title)
    {
        $this->title = $title;
        $this->slug = Util::slugify($title);
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Ad
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
     * Set price
     *
     * @param string $price
     * @return Ad
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * Set typePrice
     *
     * @param string $typePrice
     * @return Ad
     */
    public function setTypePrice($typePrice)
    {
        $this->typePrice = $typePrice;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getTypePrice()
    {
        return $this->typePrice;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Ad
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    
        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Ad
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
     * Set created_at
     *  
     * @ORM\PrePersist
     * @param \DateTime $created_at
     * @return Ad
     */
    public function setCreatedAt()
    {
        $this->created_at = new \DateTime(date('Y-m-d H:i:s'));
    
        return $this;
    }
    
//    
//    /**
//     * Metodo para usar con carga de fixtures
//     * Set created_at
//     *  
//     * @param \DateTime $created_at
//     * @return Ad
//     */
//    public function setFechaPublicacion($created_at)
//    {
//        $this->created_at = new \DateTime($created_at);
//    
//        return $this;
//    }
//    
    
    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    
    /**
     * Set expired_at
     *
     * @param \DateTime $expired_at
     * @return Ad
     */
    public function setExpiredAt($expired_at)
    {
        $this->expired_at = $expired_at;
    
        return $this;
    }

    /**
     * Get expired_at
     *
     * @return \DateTime 
     */
    public function getExpiredAt()
    {
        return $this->expired_at;
    }
    
    /**
     * Set type
     *
     * @param boolean $type
     * @return Ad
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * Set advertiser
     *
     * @param \CommercialAds\AdvertiserBundle\Entity\Advertiser $advertiser
     * @return Ad
     */
    public function setAdvertiser(\CommercialAds\AdvertiserBundle\Entity\Advertiser $advertiser = null)
    {
        $this->advertiser = $advertiser;
    
        return $this;
    }

    /**
     * Get advertiser
     *
     * @return \CommercialAds\AdvertiserBundle\Entity\Advertiser
     */
    public function getAdvertiser()
    {
        return $this->advertiser;
    }
    
    /**
     * Set region
     *
     * @param \CommercialAds\FilterBundle\Entity\Region $region
     * @return Ad
     */
    public function setRegion(\CommercialAds\FilterBundle\Entity\Region $region = null){
        $this->region = $region;
        
        return $this;
    }
    
    /**
     * Get region
     * 
     * @return \CommercialAds\FilterBundle\Entity\Region
     */
    public function getRegion(){
        return $this->region;
    }
    /**
     * Set city
     *
     * @param \CommercialAds\FilterBundle\Entity\City $city
     * @return Ads
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
    
    /*
     * Set category
     *
     * @param \CommercialAds\FilterBundle\Entity\Category $category
     * @return Ads 
     */
    public function setCategory(\CommercialAds\FilterBundle\Entity\Category $category = null){
        $this->category = $category;
        return $this;
    }
    
    /**
     * Get category
     * 
     * @return \CommercialAds\FilterBundle\Entity\Category
     */
    public function getCategory(){
        return $this->category;
    }
    /**
     * Set subcategory
     *
     * @param \CommercialAds\FilterBundle\Entity\Subcategory $subcategory
     * @return Ad
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
     * Set image
     *
     * @param \CommercialAds\AdBundle\Entity\Image $image
     * @return Ad
     */
    public function setImage(\CommercialAds\AdBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \CommercialAds\AdBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * @ORM\PrePersist
     */
    public function generateExpireDate(){
        if($this->type == true){
            $now = $this->getCreatedAt()->format('U'); //extrae fecha y convierte en segundos
            $this->setExpiredAT(new \DateTime(date('Y-m-d H:i:s', $now + 86400 * 5)));
        }else{
            $now = $this->getCreatedAt()->format('U'); //extrae fecha y convierte en segundos
            $this->setExpiredAt(new \DateTime(date('Y-m-d H:i:s', $now + 86400 * 30)));
        }
    }
    
  //**************************************************************
    /**
     * Indexar registros con Lucene.
     * @return type
     */
    static public function getLuceneIndex()
    {
        if (file_exists($index = self::getLuceneIndexFile())) {
            return \Zend_Search_Lucene::open($index);
        }
 
        return \Zend_Search_Lucene::create($index);
    }
 
    static public function getLuceneIndexFile()
    {
        return __DIR__.'/../../../../web/data/index';
    }
    
    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate
     */
    public function updateLuceneIndex(){
        $index = self::getLuceneIndex();
        
          //remove existing entries
        foreach($index->find('pk:'.$this->getId()) as $hit){
            $index->delete($hit->id);
        }
        
        $doc = new \Zend_Search_Lucene_Document();
        
        //store Ad primary key to identify it in the search results
        $doc->addField(\Zend_Search_Lucene_Field::keyword('pk', $this->getId()));
        
        //index Ad fields
        $doc->addField(\Zend_Search_Lucene_Field::unStored('title', $this->getTitle()));
        $doc->addField(\Zend_Search_Lucene_Field::unStored('description', $this->getDescription()));
        $doc->addField(\Zend_Search_Lucene_Field::unStored('slug', $this->getSlug(), 'utf-8'));

        //add Ad to the index
        $index->addDocument($doc);
        $index->commit();
    }
    /**
     * @ORM\PostRemove
     */
    public function deleteLuceneIndex(){
        $index = self::getLuceneIndex();
        
        foreach($index->find('pk:'.$this->getId()) as $hit){
            $index->delete($hit->id);
        }
    }
}
