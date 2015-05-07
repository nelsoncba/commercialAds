<?php

namespace CommercialAds\AdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CommercialAds\adBundle\Util\Util;

class DefaultController extends Controller
{
    public function indexAction($region){   
       $this->getRequest()->getSession()->remove('address');
       $this->getRequest()->getSession()->remove('lat');
       $this->getRequest()->getSession()->remove('lng');
         
       $myaddress = null;
       
       $em = $this->getDoctrine()->getManager();        
      
       $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findAds();
      
       if(!$ads) 
             $this->get('session')->getFlashBag()->add('infoAds','No existen avisos para los filtros seleccionados.'); 

       $paginator = $this->get('knp_paginator');
       $pagination = $paginator->paginate($ads, $this->get('request')->query->get('page',1),20);
       
       $response = $this->render('CommercialAdsAdBundle:Default:main.html.twig', array('pagination' => $pagination,
                                                                                       'myaddress' => $myaddress));
       $response->setSharedMaxAge(600);  
       
       return $response;

    }
    
    public function searchAction(){
        $em = $this->getDoctrine()->getManager();
        $query = $this->getRequest()->get('query');
        //throw $this->createNotFoundException('Search: '.$query);
//        if(!$query){
//            //
//        }
     //   $avisos = $em->getRepository('CommercialAdsAdBundle:Ad')->getForSphinx($query);
        $avisos = $em->getRepository('CommercialAdsAdBundle:Ad')->getForLuceneQuery($query);
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($avisos, $this->get('request')->query->get('page',1),20);
        return $this->render('CommercialAdsAdBundle:Default:main.html.twig', array('pagination' => $pagination
                                                                                             ));
    }
    
    public function adAction($city,$slug){

        $em = $this->getDoctrine()->getManager();
        $resp_city = $em->getRepository("CommercialAdsFilterBundle:City")->findOneBySlug($city);
        
        if($city && $slug){ 
               $ad = $em->getRepository("CommercialAdsAdBundle:Ad")->findAd($resp_city,$slug);
               if($ad)
                    $otherAds = $em->getRepository("CommercialAdsAdBundle:Ad")->findByAdvertiserAndSlug($ad->getAdvertiser(),$ad->getSlug());
               else
                    throw $this->createNotFoundException('Opss!! La página solicitada no está disponible.alfa');
        }else
             throw $this->createNotFoundException('Opss!! La página solicitada no está disponible.beta');

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($otherAds, $this->get('request')->query->get('page',1),20);
        return $this->render('CommercialAdsAdBundle:Default:detail.html.twig', array('ad' => $ad,
                                                                                   'pagination'=>$pagination,
                                                                                    'region_name' => $resp_city->getRegion()->getName(),
                                                                                    'city_name' => $resp_city,
                                                                                    'subcat_name' => $ad->getSubcategory()->getName()));
    }
    
    public function adsByCoordsAction($lat, $lng, $slug){
        $address = $this->getRequest()->getSession()->get('address');
        $latSession = $this->getRequest()->getSession()->get('lat');
        $lngSession = $this->getRequest()->getSession()->get('lng');

        $em = $this->getDoctrine()->getManager();
                
        $ad = $em->getRepository("CommercialAdsAdBundle:Ad")->findAdByCoords($lat,$lng,$slug);
        if(!$ad){
            throw $this->createNotFoundException('No se ha recuperado ningún aviso con los filtros elegidos. ');
        }
        $subcat_name = $ad->getSubcategory()->getSubcategory();

        $otherAds = $em->getRepository('CommercialAdsAdBundle:Ad')->findByAdvertiserAndSlug($ad->getAdvertiser()->getId(),$ad->getSlug());
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($otherAds, $this->get('request')->query->get('page',1),20);
        
        return $this->render('CommercialAdsAdBundle:Default:detalle.html.twig', array('oferta' => $ad,
                                                                                          'pagination'=> $pagination,
                                                                                          'address' => $address,
                                                                                          'subcat_name' => $subcat_name,    
                                                                                          'myLat' => $latSession,
                                                                                          'myLng' => $lngSession));
    }
    
    public function adsByRegionAction($region,$subcategory){
         $this->getRequest()->getSession()->remove('address');
         $this->getRequest()->getSession()->remove('lat');
         $this->getRequest()->getSession()->remove('lng');

         $em = $this->getDoctrine()->getManager();
         $reg = $em->getRepository("CommercialAdsFilterBundle:Region")->findOneBySlug($region);
         $n_subcategory = $em->getRepository("CommercialAdsFilterBundle:Subcategory")->findOneBySlug($subcategory); 

         if($region && $subcategory){
             if($reg && $n_subcategory)
                   $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findByRegion($reg,$n_subcategory);
             else
                   throw $this->createNotFoundException('Opss!! la página no está disponible por el momento.');
         }
         if($reg && !$subcategory){
             if($reg)
                $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findByRegion($reg,null);
             else
                throw $this->createNotFoundException('Opss!! la página no está disponible por el momento.'.$region); 
         }
         
         if(!$ads) 
             $this->get('session')->getFlashBag()->add('infoAvisos','No existen avisos para los filtros seleccionados.'); 

         $paginator = $this->get('knp_paginator');
         $pagination = $paginator->paginate($ads, $this->get('request')->query->get('page',1),20);
         
         return $this->render('CommercialAdsAdBundle:Default:main.html.twig', array('pagination' => $pagination,
                                                                                          'region_name' => $reg,
                                                                                          'subcat_name' => $n_subcategory));
    }
    
    public function adsByCityAction($region, $city, $subcategory){
         
       $em = $this->getDoctrine()->getManager(); 
       $n_subcategory = $em->getRepository("CommercialAdsFilterBundle:Subcategory")->findOneBySlug($subcategory);
       $resp_city = $em->getRepository("CommercialAdsFilterBundle:City")->findOneBySlug($city);
       
       if($region && $city && $subcategory){
           if($resp_city && $n_subcategory && $resp_city->getRegion()->getSlug() == $region)
               $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findByCitySubcat($resp_city, $n_subcategory);
           else
               throw $this->createNotFoundException('Opss!! la página no está disponible por el momento.');
       }
       if($city && !$subcategory){
           if($resp_city && $resp_city->getRegion()->getSlug() == $region)
               $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findByCity($resp_city, array('created_at'=>'DESC'));
           else
                throw $this->createNotFoundException('Opss!! la página no está disponible por el momento.'); 
       }
       if(!$ads) 
             $this->get('session')->getFlashBag()->add('infoAvisos','No existen avisos para los filtros seleccionados.'); 

       $paginator = $this->get('knp_paginator');
       $pagination = $paginator->paginate($ads, $this->get('request')->query->get('page',1),20);
       
       return $this->render('CommercialAdsAdBundle:Default:main.html.twig', array('pagination' => $pagination,
                                                                                         'city_name' => $resp_city,
                                                                                         'region_name' => $resp_city->getRegion()->getName(),
                                                                                         'subcat_name' => $n_subcategory));
    }
    
    public function filteredAdsAction($category, $subcategory){
      // throw $this->createNotFoundException('cat '.$cat);
       $this->getRequest()->getSession()->remove('address');
       $this->getRequest()->getSession()->remove('lat');
       $this->getRequest()->getSession()->remove('lng');

       $em = $this->getDoctrine()->getManager();        
       
       $n_subcategory = $em->getRepository("CommercialAdsFilterBundle:Subcategory")->findOneBySlug($subcategory);
       
       if($subcategory)
          $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findBySubcategory($n_subcategory);
       else
          throw $this->createNotFoundException('Opss!! la página no está disponible por el momento.');
       
       if(!$ads) 
             $this->get('session')->getFlashBag()->add('infoAvisos','No existen avisos para los filtros seleccionados.'); 

       $paginator = $this->get('knp_paginator');
       $pagination = $paginator->paginate($ads, $this->get('request')->query->get('page',1),20);
       
       return $this->render('CommercialAdsAdBundle:Default:main.html.twig', array('pagination' => $pagination,
                                                                                          'subcat_name' => $subcategory));      
    }
    
    public function adsByGeolocationAction(){
        $request = $this->getRequest();

        $address = $request->get('address');
        $lat = $request->get('lat');
        $lng = $request->get('lng');
        
        $sesion = $request->getSession();
        
        $sesion->set('address', $address);
        $sesion->set('lat', $lat);
        $sesion->set('lng', $lng);
        
        $subcategory = $request->get('subcat');
        $category = $request->get('cat');
       // throw $this->createNotFoundException('Opss!! la página no está disponible por el momento.  '.$lat.' '.$lng.' '.$subcat);
        if($subcategory){
        return new \Symfony\Component\HttpFoundation\RedirectResponse($this->generateUrl('near_coords_subcat',array('lat'=> $lat,
                                                                                                                 'lng'=> $lng,
                                                                                                                 'category'=>$category,
                                                                                                                 'subcategory'=> $subcategory)));
        }
        
        return new \Symfony\Component\HttpFoundation\RedirectResponse($this->generateUrl('near_coords',array('lat'=> $lat,
                                                                                                                 'lng'=> $lng
                                                                                                                 )));
    }
    
    public function adsCoordsAction($lat, $lng, $subcategory){
       $distance = 1.5;
       $latitud = (float)$lat;
       $longitud = (float)$lng;
       
       $radius = Util::getLimites($latitud, $longitud, $distance);
       $address = $this->getRequest()->getSession()->get('address');
       
       //throw $this->createNotFoundException('address '.$address);
       $em = $this->getDoctrine()->getManager();
       $n_subcategory = $em->getRepository("CommercialAdsFilterBundle:Subcategory")->findOneBySlug($subcategory);
      
       if($subcategory){
            if($n_subcategory && $lat && $lng && $radius){
                $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findByCoords($lat, $lng, $distance, $radius, $n_subcategory->getId());
            }else
                throw $this->createNotFoundException('Opss!! la página no está disponible por el momento.');
       }else{
           if($lat && $lng && $radius){
                $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findByCoords($lat, $lng, $distance, $radius, null);  
           }else
                throw $this->createNotFoundException('Opss!! la página no está disponible por el momento. sin cat');
       }
       if(!$ads) 
             $this->get('session')->getFlashBag()->add('infoAvisos','No existen avisos para los filtros seleccionados.'); 

       $paginator = $this->get('knp_paginator');
       $pagination = $paginator->paginate($ads, $this->get('request')->query->get('page',1),20);       
       return $this->render('CommercialAdsAdBundle:Default:main.html.twig', array(  'address' => $address, 
                                                                                           'pagination' => $pagination,
                                                                                           'subcat_name' => $n_subcategory,
                                                                                           'lat' => $lat,
                                                                                           'lng' => $lng));     
    }    


//    public function updateAction(){
//        $em = $this->getDoctrine()->getManager(); 
//        $slug = "oferta-tv-plasma-50pul-Sanyo" ;    
//        $ofertas = $em->getRepository("CommercialAdsAdBundle:Ad")->findAll();
//        
//        foreach($ofertas as $oferta){
//        if($oferta->getIdoferta() > 0){
//        $slug = $this->slugify($oferta->getTitulo());
//        $oferta->setSlug($slug);
//        $em->flush();
//        }
//        }
//        
//        return new Response (json_encode("Slugs cargados"));
//    }
//    
//    public function slugify($cadena, $separador="-"){
//        $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $cadena);
//        $slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
//        $slug = strtolower(trim($slug, $separador));
//        $slug = preg_replace("/[\/_|+ -]+/", $separador, $slug);
//        return $slug;
//    }
}
