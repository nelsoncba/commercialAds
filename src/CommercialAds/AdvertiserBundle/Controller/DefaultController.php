<?php

namespace CommercialAds\AdvertiserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \CommercialAds\AdvertiserBundle\Entity\Advertiser;
use \CommercialAds\AdvertiserBundle\Form\Extranet\AdvertiserType;
use Symfony\Component\HttpFoundation\Request;
use CommercialAds\AdBundle\Entity\Ad;
use CommercialAds\AdBundle\Entity\Image;

class DefaultController extends Controller
{   
    public function panelAction(){
        $em =  $this->getDoctrine()->getManager();
        $advertiser = $em->getRepository('CommercialAdsAdvertiserBundle:Advertiser')->findOneByUser($this->getUser());
        return $this->render('CommercialAdsAdvertiserBundle:Default:advertiser-panel.html.twig', array('advertiser'=>$advertiser));
    }
    
    public function publishAdAction(Request $request){
        $em =  $this->getDoctrine()->getManager();
        
        $categories = $em->getRepository('CommercialAdsFilterBundle:Category')->findAll();
        $advertiser = $em->getRepository('CommercialAdsAdvertiserBundle:Advertiser')->findOneByUser($this->getUser());
        
        $ads = $em->getRepository('CommercialAdsAdBundle:Ad')->findByAdvertiser($advertiser); 
        
        $ad = new Ad();
        $image = new Image();
        
        $subcategory = $em->getRepository('CommercialAdsFilterBundle:Subcategory')->findOneById($request->get('subcategory'));
        $title = $request->get('title');
        $description = $request->get('description');
        $typePrice = $request->get('typePrice');
        $price = $request->get('price');
        $type = $request->get('type');
        
        $image1 = $request->files->get('image1');
        $image2 = $request->files->get('image2');
        $image3 = $request->files->get('image3');
        $image4 = $request->files->get('image4'); 
        //$imagenes = array();
        // throw $this->createNotFoundException('imagen: '.$imagen1->getClientOriginalName());
  
        $images = array('1'=>$image1,'2'=>$image2,'3'=>$image3,'4'=>$image4);
        
        if($request->getMethod() == 'POST'){
            if(count($ads) < 10){
            $ad->setEnabled(true);
            $ad->setTitle($title);
            $ad->setDescription($description);
            $ad->setPrice($price);
            $ad->setTypePrice($typePrice);
            $ad->setSubcategory($subcategory);
            $ad->setCity($advertiser->getCity());
            $ad->setAdvertiser($advertiser);
            $ad->setImage($image);
            $ad->setType($type);
            
            $em->persist($ad);
            $image->setAd($ad);
            foreach($images as $key => $img){
                if(null != $img){
                    $image->uploadImg($key,$img);
                    $em->persist($image);
                }
            }
            $em->flush();
            $this->get('session')->getFlashBag()->add('infoRegis','DEMO MSJ: Su aviso se ha publicado correctamente.');
        
            }else{
            $this->get('session')->getFlashBag()->add('error','DEMO MSJ: No puede crear mas avisos por haber llegado al límite, elimine avisos para seguir probando.');
            }
        }
        
        return $this->render('CommercialAdsAdvertiserBundle:Default:publish-ad.html.twig', array('action' => null,
                                                                                                       'categories' => $categories));
    }
    
    public function registrationAction(){   
        $user = $this->get('security.context')->getToken()->getUser();
        $request = $this->getRequest();
        $city = $request->get('city');
        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository('CommercialAdsFilterBundle:Region')->findAll();
      //  $usuario = $em->getRepository('CommercialAdsUsuariosBundle:Usuarios')->findOneByIdusuario($user);
        $nCity = $em->getRepository('CommercialAdsFilterBundle:City')->findOneById($city);
        
        $advertiser = new Advertiser();
        
        $form = $this->createForm(new AdvertiserType(), $advertiser);
        $form->handleRequest($request);
        if($request->getMethod() == 'POST'){
           $advertiser->setUser($user);
           $advertiser->setcity($nCity);
           $advertiser->setLat($request->get('lat'));
           $advertiser->setLng($request->get('lng'));
           
           $em->persist($advertiser);
           $em->flush();
           $this->get('session')->getFlashBag()->add('infoRegis','Los datos de advertiser se han guardado correctamente, ya puede comenzar a publicar sus avisos.');

        }
        
        return $this->render('CommercialAdsAdvertiserBundle:Default:advertiser-profile.html.twig', array('regions'=>$regions, 'action'=>null, 'advertiser'=>null, 'form' => $form->createView()));
    }
    
    public function loadCitiesAction(){
        $slug = $this->getRequest()->get('region');
        
        $em = $this->getDoctrine()->getManager();
        $cities =  $em->getRepository("CommercialAdsFilterBundle:City")->findByRegion($slug);
       
        $loc = array();
        foreach($cities as $city){
            $loc[] = array('id' => $city->getId(), 'name'=>$city->getName());
        }
        return new \Symfony\Component\HttpFoundation\Response(json_encode($loc));
    }
    
    public function loadSubcategoriesAction(){
        $slug = $this->getRequest()->get('category');
        
        $em = $this->getDoctrine()->getManager();
        $subcategories =  $em->getRepository("CommercialAdsFilterBundle:Subcategory")->findByCategory($slug);
       
        $subcat = array();
        foreach($subcategories as $subcategory){
            $subcat[] = array('id' => $subcategory->getId(), 'name'=>$subcategory->getName());
        }
        return new \Symfony\Component\HttpFoundation\Response(json_encode($subcat));
    }
    
    public function advertiserProfileAction(){
        $request = $this->getRequest();
        $user = $this->getUser();
        $nCity = $request->get('city');

        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository('CommercialAdsFilterBundle:Region')->findAll();
        $city = $em->getRepository('CommercialAdsFilterBundle:City')->findOneById($nCity);
        $advertiser = $em->getRepository('CommercialAdsAdvertiserBundle:Advertiser')->findOneByUser($user);
        
        if(!$advertiser)
            return $this->redirect($this->generateUrl('advertisers_record'));
        
        $form = $this->createForm(new AdvertiserType(), $advertiser);
        $form->handleRequest($request);
        if($request->getMethod() == 'POST'){
            
           if($nCity != $advertiser->getCity()->getSlug()){
                 $advertiser->setCity($city);
           }
           $advertiser->setUser($user);
           $advertiser->setLat($request->get('lat'));
           $advertiser->setLng($request->get('lng'));
           
           $em->persist($advertiser);
           $em->flush();
           $this->get('session')->getFlashBag()->add('infoRegis','Los datos de advertiser se han guardado correctamente.');
           
           return $this->redirect($this->generateUrl('advertiser_profile'));
        }
        
        return $this->render('CommercialAdsAdvertiserBundle:Default:advertiser-profile.html.twig', array('advertiser'=>$advertiser, 
                                                                                                       'regions'=>$regions,
                                                                                                       'action'=>'editar'));
    }
    
    public function panelAdsAction(){
        
        $em =  $this->getDoctrine()->getManager();
        $advertiser = $em->getRepository('CommercialAdsAdvertiserBundle:Advertiser')->findOneByUser($this->getUser());        
        
        $ads = $em->getRepository('CommercialAdsAdBundle:Ad')->findByAdvertiser($advertiser);
                
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($ads, $this->get('request')->query->get('page',1),20);
        $date = time(); 
        
        return $this->render('CommercialAdsAdvertiserBundle:Default:ad-panel.html.twig', array('pagination' => $pagination, 'date' => $date));
    }
    
    public function disableAction($id){
        
        $em = $this->getDoctrine()->getManager();
        $ad = $em->getRepository('CommercialAdsAdBundle:Ad')->findOneById($id);
        $ad->setEnabled(false);
        $em->flush();
        $this->get('session')->getFlashBag()->add('infoRegis','El aviso se ha desactivado no se mostrará al público, para volver a activar pulse en "Publicar" sobre el mismo aviso.');
        
        return new \Symfony\Component\HttpFoundation\RedirectResponse($this->generateUrl('my_ads'));

    }
    
    public function enabledAction($id){
        $em = $this->getDoctrine()->getManager();
        $ad = $em->getRepository('CommercialAdsAdBundle:Ad')->findOneById($id);
        $date = $ad->getExpiredAt();
        
        if( date_format($date, 'Y-m-d H:i:s') < date('Y-m-d H:i:s',time())){
            $ad->setCreatedAt();
            $ad->generateExpireDate();
        }
        
        $ad->setEnabled(true);
        $em->flush();
        $this->get('session')->getFlashBag()->add('infoRegis','El aviso se ha publicado correctamente.');

        return new \Symfony\Component\HttpFoundation\RedirectResponse($this->generateUrl('my_ads'));
    }
    
    public function deleteAdAction($id){
        $em = $this->getDoctrine()->getManager();
        $ad = $em->getRepository('CommercialAdsAdBundle:Ad')->findOneById($id);
        
        if($ad){
            $em->remove($ad);
            $em->flush();
            $this->get('session')->getFlashBag()->add('infoRegis','El aviso se ha eliminado correctamente.');
        }
        
        return new \Symfony\Component\HttpFoundation\RedirectResponse($this->generateUrl('my_ads'));
    }

}
