<?php

namespace CommercialAds\FilterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function regionsListAction($region,$category,$subcategory){
        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository("CommercialAdsFilterBundle:Region")->findAll();
        
        $response = $this->render('CommercialAdsFilterBundle:Default:regions-list.html.twig', array(
                                                                                           'regions'=>$regions,
                                                                                           'currentRegion'=>$regions,
                                                                                           'category' => $category,
                                                                                           'subcategory' =>$subcategory));
        $response->setSharedMaxAge(3600);
        
        return $response;
    }
    
    public function citiesListAction($region,$city,$category,$subcategory){
        $em = $this->getDoctrine()->getManager();
        
        $cities = $em->getRepository("CommercialAdsFilterBundle:City")->findByRegion($region);
        
        $response = $this->render('CommercialAdsFilterBundle:Default:cities-list.html.twig', array(
                                                                                            'cities'=>$cities,
                                                                                            'currentCity'=>$city,
                                                                                            'category' => $category,
                                                                                            'subcategory'=> $subcategory));
        $response->setSharedMaxAge(3600);
  
        
        return $response;
    }
    
    public function sidebarAction($region,$city,$lat,$lng){
        $em = $this->getDoctrine()->getManager();
        
        $categories = $em->getRepository("CommercialAdsFilterBundle:Category")->findAllCategories($region,$city);
        $subcategories = $em->getRepository("CommercialAdsFilterBundle:Subcategory")->findAll();
        
        $response = $this->render("CommercialAdsFilterBundle:Default:sidebar.html.twig", array( 
                                                                                    'categories' =>  $categories,
                                                                                    'subcategories' => $subcategories,
                                                                                    'city' => $city,
                                                                                    'region' => $region,
                                                                                    'lat' => $lat,
                                                                                    'lng' => $lng
                                                                                  ));
        $response->setSharedMaxAge(3600);
        
        return $response;
    }
    
    public function sidebarAdvertiserAction(){
        return $this->render('CommercialAdsFilterBundle:Default:advertiser-sidebar.html.twig');
    }
}
