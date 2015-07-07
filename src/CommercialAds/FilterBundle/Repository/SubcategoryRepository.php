<?php
namespace CommercialAds\FilterBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SubcategoryRepository extends EntityRepository{
    
    public function findAllSubcategories(){
         $subcategories = $this->createQueryBuilder("s")
                               ->select("s.id, s.name, s.slug, c.id as category, c.slug as category_slug",  "COUNT(ad.id) as total")
                               ->leftJoin("s.category","c")
                               ->leftJoin("CommercialAds\AdBundle\Entity\Ad", "ad", "WITH", "ad.subcategory = s.id")
                               ->groupBy('s.id');
     
        return $subcategories->getQuery()->getArrayResult();
    }   
    
    public function subcategoriesByRegion($region){
        $subcategories = $categories = $this->createQueryBuilder("s")
                           ->select("s.id, s.name, s.slug, c.id as category, c.slug as category_slug", "COUNT(ad.id) as total")
                           ->leftJoin("CommercialAds\AdBundle\Entity\Ad", "ad", "WITH", "ad.subcategory = s.id AND ad.region = :region")
                           ->leftJoin("s.category", "c")
                           ->setParameter("region", $region)
                           ->groupBy("s.id");
        return $subcategories->getQuery()->getArrayResult();
    }
    
    public function subcategoriesByCity($city){
        $subcategories = $categories = $this->createQueryBuilder("s")
                           ->select("s.id, s.name, s.slug", "COUNT(ad.id) as total")
                           ->leftJoin("CommercialAds\AdBundle\Entity\Ad", "ad", "WITH", "ad.subcategory = s.id AND ad.city = :city")
                           ->setParameter("city", $city)
                           ->groupBy("s.id");
        return $subcategories->getQuery()->getArrayResult();
    }
    
    public function findByCategory($category){
        
        $subcategories = $this->createQueryBuilder("s")
                         ->select("s.id, s.name, s.slug", "COUNT(ad.id) as total")
                         ->leftJoin("CommercialAds\AdBundle\Entity\Ad", "ad", "WITH", "ad.subcategory = s.id")
                         ->where("s.category = :category")
                         ->setParameter("category", $category)
                         ->groupBy("s.id");

                         
        return $subcategories->getQuery()
                           ->getArrayResult();
    }


}


