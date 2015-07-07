<?php

namespace CommercialAds\FilterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/api")
 */
class ApiFilterController extends Controller
{
    /**
     * @Route("/regions/list")
     * @Method({"GET"})
     * @param type $region
     * @param type $category
     * @param type $subcategory
     * @return type
     */
    public function regionsListAction(){
        $serializer = $this->container->get('serializer');
        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository("CommercialAdsFilterBundle:Region")->findAll();
        
        $resp_regions = json_decode($serializer->serialize($regions, 'json'));
        return new JsonResponse($resp_regions,201);
    }
    
    /**
     * @Route("/cities/list/region={region}")
     * @param type $region
     * @param type $city
     * @param type $category
     * @param type $subcategory
     * @return type
     */
    public function citiesListAction($region){
        $serializer = $this->container->get('serializer');
        $em = $this->getDoctrine()->getManager();
        
        $cities = $em->getRepository("CommercialAdsFilterBundle:City")->findByRegion($region);
  
        $resp_cities = json_decode($serializer->serialize($cities, 'json'));
        return new JsonResponse($resp_cities, 201);
    }
    
    /**
     * @Route("/categories/list/region={region}/city={city}")
     * @Method({"GET"})
     * 
     */
    public function categoriesList($region, $city){
        $em = $this->getDoctrine()->getManager();
        if(!$region && !$city){
            $categories = $em->getRepository("CommercialAdsFilterBundle:Category")->findAllCategories();
        }else if($region){
            $n_region = $em->getRepository("CommercialAdsFilterBundle:Region")->findOneBySlug($region);
            $categories = $em->getRepository("CommercialAdsFilterBundle:Category")->categoriesByRegion($n_region->getId());
        }else if($city){
            $n_city = $em->getRepository("CommercialAdsFilterBundle:City")->findOneBySlug($city);
            $categories = $em->getRepository("CommercialAdsFilterBundle:Category")->categoriesByCity($n_city->getId());
        }
        return new JsonResponse($categories,201);
    }
    
    /**
     * @Route("/subcategories/list/region={region}/city={city}")
     * @Method({"GET"})
     */
    public function subcategoriesList($region, $city){
        $em = $this->getDoctrine()->getManager();
        try {
            if(!$region && !$city){
                $subcategories = $em->getRepository("CommercialAdsFilterBundle:Subcategory")->findAllSubcategories();
            }else if($region){
                $n_region = $em->getRepository("CommercialAdsFilterBundle:Region")->findOneBySlug($region);
                $subcategories = $em->getRepository("CommercialAdsFilterBundle:Subcategory")->subcategoriesByRegion($n_region);
            }else if($city){
                $n_city = $em->getRepository("CommercialAdsFilterBundle:City")->findOneBySlug($city);
                $subcategories = $em->getRepository("CommercialAdsFilterBundle:Subcategory")->subcategoriesByCity($n_city);
            }
            return new JsonResponse($subcategories,202);
            
        } catch (Exception $e) {
            return new JsonResponse($e);
        }
        
    }
    
//    public function sidebarAction($region,$city,$lat,$lng){
//        $em = $this->getDoctrine()->getManager();
//        
//        $categories = $em->getRepository("CommercialAdsFilterBundle:Category")->findAllCategories($region,$city);
//        $subcategories = $em->getRepository("CommercialAdsFilterBundle:Subcategory")->findAll();
//        
//        $response = $this->render("CommercialAdsFilterBundle:Default:sidebar.html.twig", array( 
//                                                                                    'categories' =>  $categories,
//                                                                                    'subcategories' => $subcategories,
//                                                                                    'city' => $city,
//                                                                                    'region' => $region,
//                                                                                    'lat' => $lat,
//                                                                                    'lng' => $lng
//                                                                                  ));
//        $response->setSharedMaxAge(3600);
//        
//        return $response;
//    }
    
    public function sidebarAdvertiserAction(){
        return $this->render('CommercialAdsFilterBundle:Default:advertiser-sidebar.html.twig');
    }
}
