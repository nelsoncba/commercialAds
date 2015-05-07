<?php
namespace CommercialAds\adBundle\Util;

class Util {
    
   public static function getLimites($lat, $lng,  $distance = 1, $earthRadius = 6371){
       
       $return = array();
       
       $cardinalCoords = array('north' => '0',
                               'south' => '180',
                               'east' => '90',
                               'west' => '270');
       
       $rLat = deg2rad($lat); //convierte $lat (en grados) a radianes
       $rLng = deg2rad($lng); //convierte $lng (en grados) a radianes
       $rAngDist = $distance / $earthRadius;
       
       foreach ($cardinalCoords as $name => $angle){
           $rAngle = deg2rad($angle);
           $rLatB = asin(sin($rLat) * cos($rAngDist) + cos($rLat) * sin($rAngDist) * cos($rAngle));
           $rLonB = $rLng + atan2(sin($rAngle) * sin($rAngDist) * cos($rLat), cos($rAngDist) - sin($rLat) * sin($rLatB));
           
           $return[$name] = array('lat' => (float) rad2deg($rLatB),
                                  'lng' => (float) rad2deg($rLonB));
       }
       
       return array('min-lat' => $return['south']['lat'],
                    'max-lat' => $return['north']['lat'],
                    'min-lng' => $return['west']['lng'],
                    'max-lng' => $return['east']['lng']);
   }
   
   public static function slugify($cadena, $separador="-"){
        $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $cadena);
        $slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
        $slug = strtolower(trim($slug, $separador));
        $slug = preg_replace("/[\/_|+ -]+/", $separador, $slug);
        return $slug;
   }
   
//   public static function getSesion(){
//        $session = new \Symfony\Component\HttpFoundation\Session\Session();
//        $session->start();
//        return $session;
//    }
   
}

?>
