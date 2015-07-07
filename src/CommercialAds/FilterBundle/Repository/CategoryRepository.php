<?php
namespace CommercialAds\FilterBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository{
    
    public function findAllCategories(){
        $categories = $this->createQueryBuilder("c")
                           ->select("c.id, c.name, c.slug", "COUNT(ad.id) as total")
                           ->leftJoin("CommercialAds\AdBundle\Entity\Ad", "ad", "WITH", "ad.category = c.id")
                           ->groupBy("c.id");
                       
        return $categories->getQuery()->getArrayResult();
    } 
    
    public function categoriesByRegion($region){
        $categories = $categories = $this->createQueryBuilder("c")
                           ->select("c.id, c.name, c.slug", "COUNT(ad.id) as total")
                           ->leftJoin("CommercialAds\AdBundle\Entity\Ad", "ad", "WITH", "ad.category = c.id AND ad.region = :region")
                           ->setParameter("region", $region)
                           ->groupBy("c.id");
        return $categories->getQuery()->getArrayResult();
    }
    
    public function categoriesByCity($city){
        $categories = $categories = $this->createQueryBuilder("c")
                           ->select("c.id, c.name, c.slug", "COUNT(ad.id) as total")
                           ->leftJoin("CommercialAds\AdBundle\Entity\Ad", "ad", "WITH", "ad.category = c.id AND ad.city = :city")
                           ->setParameter("city", $city)
                           ->groupBy("c.id");
        return $categories->getQuery()->getArrayResult();
    }
}
?>
