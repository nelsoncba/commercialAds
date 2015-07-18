<?php

namespace CommercialAds\AdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/api")
 */
class ApiAdController extends Controller
{
    /**
     * @Route("/allAds/{page}")    
     * @Method({"GET"})
     * @param type $page
     */
    public function getAllAction($page, $perPage = 5)
    {   
        if($page){
        $serializer = $this->container->get('serializer');
        $em = $this->getDoctrine()->getManager();        
     
        $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findAds();

       // $ads_count = count($ads);

        /*$paginator = array(
            'page' => $page,
            'route' => '/allAds',
            ''
            'pages_count' => ceil($ads_count / $perPage),
            'route_params' => array()
        );*/
      
      //  if(!$pagination) 
       //      $this->get('session')->getFlashBag()->add('infoAds','No existen avisos para los filtros seleccionados.'); 

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($ads, $this->get('request')->query->get('page',$page),5);

        $resp_pagination = json_decode($serializer->serialize($pagination, 'json'));
        return new JsonResponse($resp_pagination, 200);
      }else{
        return new JsonResponse('no existe page',403);
      }
        
    }

    /**
     * @Route("/ad/{city}/{slug}", name="single_Ad")
     * @Method("GET")
     */
    public function getAdAction($city,$slug)
    {   
        $serializer = $this->container->get('serializer');
        $em = $this->getDoctrine()->getManager();    
        
            $resp_city = $em->getRepository("CommercialAdsFilterBundle:City")->findOneBySlug($city);
            if($city && $slug && $resp_city){
                $ad = $em->getRepository("CommercialAdsAdBundle:Ad")->findAd($resp_city,$slug);
                if($ad)
                    $otherAds = $em->getRepository("CommercialAdsAdBundle:Ad")->findByAdvertiserAndSlug($ad['advertiser']['id'],$ad['slug']);
            
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($otherAds, $this->get('request')->query->get('page',1),20);

            $resp_pagination = json_decode($serializer->serialize($pagination, 'json'));
            return new JsonResponse(array('ad'=>$ad, 'pagination'=>$resp_pagination),200);
            }else{
                return new JsonResponse("Parámetros de busqueda incorrectos",403);
            }
    }
    
    /**
     * @Route("/ads/coords/{lat}/{lng}/{slug}", name="ads_by_coords")
     * @Method("GET")
     * @param type $lat
     * @param type $lng
     * @param type $slug
     * @return type
     * @throws type
     */
    public function adsByCoordsAction($lat, $lng, $slug){
        $address = $this->getRequest()->getSession()->get('address');
        $latSession = $this->getRequest()->getSession()->get('lat');
        $lngSession = $this->getRequest()->getSession()->get('lng');

        $em = $this->getDoctrine()->getManager();
                
        $ad = $em->getRepository("CommercialAdsAdBundle:Ad")->findAdByCoords($lat,$lng,$slug);
        if(!$ad){
            return new JsonResponse('El anuncio no existe.',403);
        }
        $subcat_name = $ad->getSubcategory()->getName();

        $otherAds = $em->getRepository('CommercialAdsAdBundle:Ad')->findByAdvertiserAndSlug($ad->getAdvertiser()->getId(),$ad->getSlug());
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($otherAds, $this->get('request')->query->get('page',1),20);
        
        return new JsonResponsse(array('ad' => $ad,
                                       'pagination'=> $pagination,
                                       'address' => $address,
                                       'subcat_name' => $subcat_name,    
                                       'myLat' => $latSession,
                                       'myLng' => $lngSession),200);
    }
    
    /**
     * @Route("/ads/region={region}/subcategory={subcategory}/page={page}")
     * @Method({"GET"})
     * @param type $region
     * @param type $subcategory
     * @param type $page
     * @return type
     * @throws type
     */
    public function adsByRegionAction($region, $subcategory, $page, $perPage = 5){
//         $this->getRequest()->getSession()->remove('address');
//         $this->getRequest()->getSession()->remove('lat');
//         $this->getRequest()->getSession()->remove('lng');
         $ads = null;
         $n_region = null;
         $n_subcategory = null;
         $serializer = $this->container->get('serializer');
         $em = $this->getDoctrine()->getManager();
         $n_region = $em->getRepository("CommercialAdsFilterBundle:Region")->findOneBySlug($region);
         $n_subcategory = $em->getRepository("CommercialAdsFilterBundle:Subcategory")->findOneBySlug($subcategory); 

         if($region && !$subcategory){
           $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findByRegionSubcat($n_region->getId(), null);
         }
         if(!$region && $subcategory){
            if($n_subcategory){
              $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findBySubcategory($n_subcategory);             
            }
         }
         if($region && $subcategory){
            if($n_subcategory){
              $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findByRegionSubcat($n_region->getId(), $n_subcategory);
            }
         }
         
        /*if(!$ads || $ads = undefined) 
             return JsonResponse('message','No existen avisos para los parámetros seleccionados.'); */
         
         $paginator = $this->get('knp_paginator');
         $pagination = $paginator->paginate($ads, $this->get('request')->query->get('page',$page),5);
         
         $resp_ads = json_decode($serializer->serialize($pagination, 'json'));
         $n_region=json_decode($serializer->serialize($n_region,'json'));
         $subcat=json_decode($serializer->serialize($n_subcategory,'json'));
         return new JsonResponse(['ads'=>$resp_ads,'region'=>$n_region, 'subcategory'=>$subcat], 200);
    }
    
    /**
     * @Route("/ads/city={city}/subcategory={subcategory}/page={page}")
     * @Method({"GET"})
     * @param type $region
     * @param type $city
     * @param type $subcategory
     * @return type
     * @throws type
     */
    public function adsByCityAction($city, $subcategory, $page, $perPage = 5){
       
       $serializer = $this->container->get('serializer');
       $em = $this->getDoctrine()->getManager(); 
       $n_subcategory = $em->getRepository("CommercialAdsFilterBundle:Subcategory")->findOneBySlug($subcategory);
       $n_city = $em->getRepository("CommercialAdsFilterBundle:City")->findOneBySlug($city);
       
       if($city && $subcategory){
           if($n_city && $n_subcategory)
               $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findByCitySubcat($n_city, $n_subcategory);
       }
       if($city && !$subcategory){
           if($n_city)
               $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findByCitySubcat($n_city, null); //no existe metodo
       }
       
       $paginator = $this->get('knp_paginator');
       $pagination = $paginator->paginate($ads, $this->get('request')->query->get('page',$page),5);
       
       $resp_ads = json_decode($serializer->serialize($pagination, 'json'));
       $n_city =json_decode($serializer->serialize($n_city,'json'));
       $subcat=json_decode($serializer->serialize($n_subcategory,'json'));
       
       if(!$ads) 
            return new JsonResponse(['error'=>'No existen avisos con los filtros elegidos.','city'=>$n_city, 'subcategory'=>$subcat],403); 
       else
            return new JsonResponse(['ads'=>$resp_ads,'city'=>$n_city, 'subcategory'=>$subcat], 200);
    }
    
    /**
     * @Route("/ads/subcategory={subcategory}/page={page}")
     * @Method({"GET"})
     * @param type $subcategory
     * @return type
     * @throws type
     */
    public function adsBySubcategoryAction($subcategory, $page){
       $ads = null;
       $serializer = $this->container->get('serializer');
       /*$this->getRequest()->getSession()->remove('address');
       $this->getRequest()->getSession()->remove('lat');
       $this->getRequest()->getSession()->remove('lng');*/

       $em = $this->getDoctrine()->getManager();        
       
       $n_subcategory = $em->getRepository("CommercialAdsFilterBundle:Subcategory")->findOneBySlug($subcategory);
       
       if($subcategory){
          if($n_subcategory){
            $ads = $em->getRepository("CommercialAdsAdBundle:Ad")->findBySubcategory($n_subcategory->getId());
          }
       }
       
       $paginator = $this->get('knp_paginator');
       $pagination = $paginator->paginate($ads, $this->get('request')->query->get('page',$page),5);
       
       $n_subcategory = json_decode($serializer->serialize($n_subcategory, 'json'));
       $resp_ads = json_decode($serializer->serialize($pagination, 'json'));
       return new JsonResponse(['ads'=>$resp_ads,'subcategory'=>$n_subcategory], 200);      
    }
    
    /**
     * @Route("/ads/geolocation/{lat}/{lng}/{address}/{category}/{subcategory}")
     * @Method({"GET"})
     * 
     */
    public function adsByGeolocationAction($lat, $lng, $address){
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
}
