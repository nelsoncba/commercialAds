<?php 
namespace CommercialAds\FilterBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CityRepository extends EntityRepository{
    
    public function findByRegion($region){
        
        $cities = $this->createQueryBuilder("c")
                         ->select("c")
                         ->leftJoin("c.region", "r")
                         ->where("r.slug = :region")
                         ->setParameter("region", $region);
                         
                         
        
        return $cities->getQuery()
                           ->getResult();
    }
   
            
}


