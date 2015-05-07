<?php
namespace CommercialAds\FilterBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SubcategoryRepository extends EntityRepository{
    
    public function findByCategory($category){
        
        $subcategories = $this->createQueryBuilder("s")
                         ->select("s")
                         ->leftJoin("s.category", "p")
                         ->where("p.slug = :category")
                         ->setParameter("category", $category);
                         
                         
        
        return $subcategories->getQuery()
                           ->getResult();
    }
   
            
}


