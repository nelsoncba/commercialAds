<?php
namespace CommercialAds\AdBundle\Repository;

use Doctrine\ORM\EntityRepository;
use CommercialAds\AdBundle\Entity\Ad;


class AdRepository extends EntityRepository{
    
    public function findAds(){
        $ad = $this->createQueryBuilder("ad")
                       ->select("ad")
                       ->where('ad.enabled = true')
                      // ->andWhere('o.fechaExpiracion > :fechaActual')
                     //  ->setParameter('fechaActual', date('Y-m-d H:i:s', time()))  //
                       ->orderBy("ad.created_at", "DESC");
       // $ad->useResultCache(true, 600);
        
        return $ad->getQuery()->getResult();
    }
    
    public function findBySubcategory($subcategory_id){
//        $em = $this->getEntityManager();
//        $ad = $em->createQuery('
//            SELECT o From CommercialAds\OfertasBundle\Entity\Ofertas o
//            WHERE o.subcategory = :subcat
//            AndWHERE o.enabled = true
//            ORDER BY o.fechaPublicacion DESC');
//        $ad->setParameter('subcat', $subcategory_id);
        $ad = $this->createQueryBuilder("ad")
                       ->select("ad")
                       ->where("ad.subcategory = :subcat")
                       ->andWhere("ad.enabled = true")
                       ->setParameter("subcat", $subcategory_id)
                       ->orderBy("ad.created_at", "DESC");          
        
        return $ad->getQuery()->getResult(); /*$ad->getQuery()->getResult();*/
    }
    
    public function findByCitySubcat($city,$subcategory){
        $ad = $this->createQueryBuilder("ad")
                       ->select("ad")
                       ->where("ad.city = :city")
                       ->andWhere('ad.enabled = true')
//                       ->andWhere('o.fechaExpiracion > :fechaActual')
//                       ->setParameter('fechaActual', date('Y-m-d H:i:s', time()))
                       ->setParameter("city", $city)
                       ->orderBy("ad.created_at","DESC");
       if($subcategory){
           $ad->andWhere("ad.subcategory = :subcat")
                  ->setParameter("subcat", $subcategory);
       }
   //    $ad->useResultCache(true, 600);
        return $ad->getQuery()->getResult();
    }
    
    public function findByRegion($region,$subcategory){
        $ad = $this->createQueryBuilder("ad")
                       ->select("ad")
                       ->innerJoin("ad.city", "c")
                       ->where("c.region = :region")
                       ->andWhere('ad.enabled = true')
//                       ->andWhere('o.fechaExpiracion > :fechaActual')
//                       ->setParameter('fechaActual', date('Y-m-d H:i:s', time()))
                       ->setParameter("region", $region)
                       ->orderBy("ad.created_at", "DESC");
       
        if($subcategory){
           $ad->andWhere("ad.subcategory = :subcat")
                  ->setParameter("subcat", $subcategory);
       }
     //  $ad->useResultCache(true, 600);
       
        return $ad->getQuery()->getResult();
    }
    
    public function findAd($city,$slug){
        $ad = $this->createQueryBuilder("ad")
                       ->select("ad")
                       ->where("ad.slug = :slug")
                       ->andWhere('ad.enabled = true')
//                       ->andWhere('o.fechaExpiracion > :fechaActual')
//                       ->setParameter('fechaActual', date('Y-m-d H:i:s', time()))
                       ->setParameter("slug", $slug)
                       ->andWhere("ad.city = :city")
                       ->setParameter("city", $city);
        
        $ad->setMaxResults(1);
        $query = $ad->getQuery();
        return $query->getOneOrNullResult();
    }
    
    public function findAdByCoords($lat, $lng, $slug){
        $aviso = $this->createQueryBuilder('ad')
                      ->select('ad')
                      ->Join('ad.advertiser', 'a')
                      ->where('ad.slug = :slug')
                      ->andWhere('ad.lat = :lat')
                      ->andWhere('a.lng = :lng')
                      ->andWhere('ad.enabled = true')
//                       ->andWhere('o.fechaExpiracion > :fechaActual')
//                       ->setParameter('fechaActual', date('Y-m-d H:i:s', time()))
                      ->setParameter('lat', $lat)
                      ->setParameter('lng', $lng)
                      ->setParameter('slug', $slug);
        
        $aviso->setMaxResults(1);
        
        $query = $aviso->getQuery();
        return $query->getOneOrNullResult();
    }
    
    
    public function findByAdvertiserAndSlug($advertiser,$slug){
        $ad = $this->createQueryBuilder("ad")
                       ->select("ad")
                       ->where("ad.advertiser = :advertiser")
                       ->andWhere("ad.slug <> :slug")
                       ->andWhere('ad.enabled = true')
//                       ->andWhere('o.fechaExpiracion > :fechaActual')
//                       ->setParameter('fechaActual', date('Y-m-d H:i:s', time()))
                       ->setParameter("advertiser", $advertiser)
                       ->setParameter("slug", $slug)
                       ->orderBy("ad.created_at", "DESC");
        return $ad->getQuery()->getResult();
    }
    
    public function findByCoords($lat, $lng, $distance, $radius, $subcategory){
        
//        $em = $this->getEntityManager();
//        $ad =  $em->createQuery('SELECT o, (6371 * ACOS(SIN(RADIANS(a.lat)) 
//                                                            * SIN(RADIANS(:lat)) 
//                                                            + COS(RADIANS(a.lng - :lng)) 
//                                                            * COS(RADIANS(a.lat)) 
//                                                            * COS(RADIANS(:lat))
//                                                            )) AS HIDDEN distance
//                                     FROM CommercialAds\OfertasBundle\Entity\Ofertas o
//                                     JOIN o.advertiser a
//                                     WHERE (a.lat BETWEEN :minLat AND :maxLat)
//                                     AND (a.lng BETWEEN :minLng AND :maxLng)
//                                     HAVING distance < :distance 
//                                     ORDER BY o.fechaPublicacion DESC');
        $ad = $this->createQueryBuilder('ad')
                       ->select('ad','(6371 * ACOS(SIN(RADIANS(a.lat)) 
                                                            * SIN(RADIANS(:lat)) 
                                                            + COS(RADIANS(a.lng - :lng)) 
                                                            * COS(RADIANS(a.lat)) 
                                                            * COS(RADIANS(:lat))
                                                            )) AS HIDDEN distance')
                       ->join('ad.advertiser', 'a')
                       ->where('a.lat BETWEEN :minLat AND :maxLat')
                       ->andWhere('a.lng BETWEEN :minLng AND :maxLng')
                       ->andWhere('ad.enabled = true')
//                       ->andWhere('o.fechaExpiracion > :fechaActual')
//                       ->setParameter('fechaActual', date('Y-m-d H:i:s', time()))
                       ->having('distance < :distance')
                       ->orderBy('ad.created_at','DESC');
        
        $ad->setParameter('minLat', $radius['min-lat'])
               ->setParameter('maxLat', $radius['max-lat'])
               ->setParameter('minLng', $radius['min-lng'])
               ->setParameter('maxLng', $radius['max-lng'])
               ->setParameter('lat', $lat)
               ->setParameter('lng', $lng)
               ->setParameter('distance', $distance);
        if($subcategory){
            $ad->andWhere('ad.subcategory = :subcategory')
                   ->setParameter('subcategory', $subcategory);
        }
        return $ad->getQuery()->getResult();
    }
    
    public function countAds(){
        $qb = $this->createQueryBuilder("ad")
                   ->select("count(ad.id)");
        
        $query = $qb->getQuery();
        return $query->getSingleScalarResult();
    }
    
    public function getForLuceneQuery($query){
        \Zend_Search_Lucene_Search_Query_Wildcard::setMinPrefixLength(3);
        $hits = Ad::getLuceneIndex()->find($query);
        
        $pks = array();
        foreach($hits as $hit){
            $pks[] = $hit->pk;
        }
        
        if(empty($pks)){
            return array();
        }
        
        $q = $this->createQueryBuilder('ad')
                  ->where('ad.id IN (:pks)')
                  ->setParameter('pks', $pks)
                  ->orderBy("ad.created_at", "DESC")
                  ->getQuery();
        
         
        return $q->getResult();
    }
}

