<?php

namespace CommercialAds\adBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CommercialAds\AdBundle\Entity\Ad;
use CommercialAds\AdBundle\Entity\Image;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;


class DataFixtures extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{   
    private $container;
    
    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null){
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager) {
        
        $em = $this->container->get('doctrine')->getManager();
        
        $city152 = $em->getRepository('CommercialAdsFilterBundle:City')->findOneById(152);
        $city250 = $em->getRepository('CommercialAdsFilterBundle:City')->findOneById(250);
        $subcategory82 = $em->getRepository('CommercialAdsFilterBundle:Subcategory')->findOneById(82);
        $subcategory3 = $em->getRepository('CommercialAdsFilterBundle:Subcategory')->findOneById(3);
        $subcategory43 = $em->getRepository('CommercialAdsFilterBundle:Subcategory')->findOneById(43);
        $subcategory83 = $em->getRepository('CommercialAdsFilterBundle:Subcategory')->findOneById(83);
        $subcategory45 = $em->getRepository('CommercialAdsFilterBundle:Subcategory')->findOneById(45);
        $advertiser13 = $em->getRepository('CommercialAdsAdvertiserBundle:Advertiser')->findOneById(13);
        $advertiser14 = $em->getRepository('CommercialAdsAdvertiserBundle:Advertiser')->findOneById(14);
        $advertiser7 = $em->getRepository('CommercialAdsAdvertiserBundle:Advertiser')->findOneById(7);
        $advertiser8 = $em->getRepository('CommercialAdsAdvertiserBundle:Advertiser')->findOneById(8);
        $advertiser9 = $em->getRepository('CommercialAdsAdvertiserBundle:Advertiser')->findOneById(9);
        
        
       for ($i=0; $i<50; $i++) {
           $mes = rand(5, 10);
           $dia = rand(1, 10);
        $image1 = new Image();
        $ad = new Ad();
        $ad->setCity($city152);
        $ad->setSubcategory($subcategory45);
        $ad->setTitle('Promocion 2 pen drive 8 GB x $120!!');
        $ad->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $ad->setTypePrice('pesos');
        $ad->setPrice(120);
        $ad->setEnabled(1);
        $ad->setImage($image1);
        $ad->setCreatedAt("2014-".$mes."-".$dia." 06:15:53");
        $ad->setAdvertiser($advertiser13);
        $ad->setSlug('promocion-2-pen-drive-8-gb-x-120');
        $image1->setAd($ad);
        $image1->setPath1('pendrive1.jpg');
        $image1->setPath2('pendrive2.jpg');
        $manager->persist($ad);
       }
       
       for ($i=0; $i<50; $i++) {
           $mes = rand(5, 10);
           $dia = rand(1, 10);
        $image2 = new Image();
        $ad = new Ad();
        $ad->setCity($city152);
        $ad->setSubcategory($subcategory82);
        $ad->setTitle('Hoy porción de lasagna 20% de descuento promocional');
        $ad->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $ad->setTypePrice('porcentaje');
        $ad->setPrice(20);
        $ad->setEnabled(1);
        $ad->setImage($image2);
        $ad->setCreatedAt("2014-".$mes."-".$dia." 06:27:53");
        $ad->setAdvertiser($advertiser14);
        $ad->setSlug('hoy-porcion-de-lasagna-20-de-descuento-promocional');
        $image2->setAd($ad);
        $image2->setPath1('lasagna1.jpg');
        $manager->persist($ad);
       }
       
       for ($i=0; $i<200; $i++) {
           $mes = rand(5, 10);
           $dia = rand(1, 10);
        $image3 = new Image();
        $ad = new Ad();
        $ad->setCity($city250);
        $ad->setSubcategory($subcategory3);
        $ad->setTitle('Mix de frutas en oferta, aprovecha el descuento!!');
        $ad->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $ad->setTypePrice('porcentaje');
        $ad->setPrice(10);
        $ad->setEnabled(1);
        $ad->setImage($image3);
        $ad->setCreatedAt("2014-".$mes."-".$dia." 06:40:53");
        $ad->setAdvertiser($advertiser7);
        $ad->setSlug('mix-de-frutas-en-oferta-aprovecha-el-descuento');
        $image3->setAd($ad);
        $image3->setPath1('frutas1.jpg');
        $image3->setPath2('frutas2.jpg');
        $image3->setPath3('frutas3.jpg');
        $image3->setPath4('frutas4.jpg');
        $manager->persist($ad);
       }
       
       for ($i=0; $i<200; $i++) {
           $mes = rand(5, 10);
           $dia = rand(1, 10);
        $image4 = new Image();
        $ad = new Ad();
        $ad->setCity($city250);
        $ad->setSubcategory($subcategory43);
        $ad->setTitle('Zapatillas Adidas, con descuento esta semana!!');
        $ad->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $ad->setTypePrice('porcentaje');
        $ad->setPrice(15);
        $ad->setEnabled(1);
        $ad->setImage($image4);
        $ad->setCreatedAt("2014-".$mes."-".$dia." 06:40:53");
        $ad->setAdvertiser($advertiser8);
        $ad->setSlug('zapatillas-adidas-con-descuento-esta-semana');
        $image4->setAd($ad);
        $image4->setPath1('zapatillas1.jpg');
        $image4->setPath2('zapatillas2.jpg');
        $image4->setPath3('zapatillas3.jpg');
        $image4->setPath4('zapatillas4.jpg');
        $manager->persist($ad);
       }
       
       for ($i=0; $i<200; $i++) {
           $mes = rand(5, 10);
           $dia = rand(1, 10);
        $image5 = new Image();
        $ad = new Ad();
        $ad->setCity($city250);
        $ad->setSubcategory($subcategory83);
        $ad->setTitle('Plasma TV 32`` a solo $3000!!');
        $ad->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $ad->setTypePrice('pesos');
        $ad->setPrice(3000);
        $ad->setEnabled(1);
        $ad->setImage($image5);
        $ad->setCreatedAt("2014-".$mes."-".$dia." 06:40:53");
        $ad->setAdvertiser($advertiser9);
        $ad->setSlug('plasma-tv-32-a-solo-3000');
        $image5->setAd($ad);
        $image5->setPath1('plasma1.jpg');
        $image5->setPath2('plasma2.jpg');
        $image5->setPath3('plasma3.jpg');
        $manager->persist($ad);
       }
       
       for ($i=0; $i<100; $i++) {
           $mes = rand(5, 10);
           $dia = rand(1, 10);
        $image6 = new Image();
        $ad = new Ad();
        $ad->setCity($city250);
        $ad->setSubcategory($subcategory83);
        $ad->setTitle('Oferta 25% de descuento en Heladera');
        $ad->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $ad->setTypePrice('porcentaje');
        $ad->setPrice(25);
        $ad->setEnabled(1);
        $ad->setImage($image6);
        $ad->setCreatedAt("2014-".$mes."-".$dia." 06:40:53");
        $ad->setAdvertiser($advertiser9);
        $ad->setSlug('oferta-20-de-descuento-en-heladera');
        $image6->setAd($ad);
        $image6->setPath1('heladera1.jpg');
        $image6->setPath2('heladera2.jpg');
        $manager->persist($ad);
       }
       
       for ($i=0; $i<50; $i++) {
           $mes = rand(5, 10);
           $dia = rand(1, 10);
        $image7 = new Image();
        $ad = new Ad();
        $ad->setCity($city152);
        $ad->setSubcategory($subcategory82);
        $ad->setTitle('Esta semana 10% de descuento en 2 platos de pastas');
        $ad->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $ad->setTypePrice('porcentaje');
        $ad->setPrice(10);
        $ad->setEnabled(1);
        $ad->setImage($image7);
        $ad->setCreatedAt("2014-".$mes."-".$dia." 06:40:53");
        $ad->setAdvertiser($advertiser14);
        $ad->setSlug('esta-semana-10-de-descuento-en-2-platos-de-pastas');
        $image7->setAd($ad);
        $image7->setPath1('ravioles1.jpg');
        $manager->persist($ad);
       }
       
       for ($i=0; $i<50; $i++) {
           $mes = rand(5, 10);
           $dia = rand(1, 10);
        $ad = new Ad();
        $image8 = new Image();
        $ad->setCity($city152);
        $ad->setSubcategory($subcategory45);
        $ad->setTitle('Promocion 1 disco rigido 8 TB x $250!!');
        $ad->setDescription('Casa computación');
        $ad->setTypePrice('pesos');
        $ad->setPrice(250);
        $ad->setEnabled(1);
        $ad->setImage($image8);
        $ad->setCreatedAt("2013-10-".$mes."-".$dia." 06:15:53");
        $ad->setAdvertiser($advertiser13);
        $ad->setSlug('promocion-1-disco-rigido-8-Tb-x-250');
        $image8->setAd($ad);
        $image8->setPath1('discorigido1.jpg');
        $image8->setPath2('discorigido2.jpg');
        $manager->persist($ad);
       }
       
       for ($i=0; $i<5; $i++) {
           $mes = rand(5, 10);
           $dia = rand(1, 10);
        $ad = new Ad();
        $image9 = new Image();
        $ad->setCity($city152);
        $ad->setSubcategory($subcategory45);
        $ad->setTitle('1 año en descuentos en compras mayores a 500 pesos !! ');
        $ad->setDescription('Solo por esta semana se permiará con un año de descuentos en productos......');
        $ad->setTypePrice('porcentaje');
        $ad->setPrice(8);
        $ad->setEnabled(1);
        $ad->setImage($image9);
        $ad->setCreatedAt("2014-10-".$mes."-".$dia." 06:15:53");
        $ad->setAdvertiser($advertiser13);
        $ad->setSlug('1-año-en-descuentos-en-compras-mayores-a-500-pesos');
        $image9->setAd($ad);
        $manager->persist($ad);
       }
       
        $manager->persist($image1);
        $manager->persist($image2);
        $manager->persist($image3);
        $manager->persist($image4);
        $manager->persist($image5);
        $manager->persist($image6);
       
        $manager->flush();
        
        
    }
    
//    public function updateAction(){
//        $em = $this->getDoctrine()->getManager(); 
//               
//        $ad = $em->getRepository("CommercialAdsAdBundle:Ad")->findAll();
//        
//        foreach($ad as $oferta){
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
    
    public function getOrder(){
        return 1;
    }
}
