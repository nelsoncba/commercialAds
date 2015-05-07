<?php
namespace CommercialAds\FilterBundle\Repository;

use Doctrine\ORM\EntityRepository;

class RegionRepository extends EntityRepository{
    
    public function regionSingle($region){
        
        $region = $this->createQueryBuilder("r")
                          ->select("r")
                          ->where("r.slug = :slug")
                          ->setParameter("slug", $region);
        
        $query = $region->getQuery();
        return $query->getOneOrNullResult();
        
    }
}

?>
