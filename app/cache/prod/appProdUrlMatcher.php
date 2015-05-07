<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // user_register
        if ($pathinfo === '/registro') {
            return array (  '_controller' => 'CommercialAds\\UserBundle\\Controller\\DefaultController::registerAction',  '_route' => 'user_register',);
        }

        // user_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'CommercialAds\\UserBundle\\Controller\\DefaultController::loginAction',  '_route' => 'user_login',);
        }

        // user_profile
        if ($pathinfo === '/perfil') {
            return array (  '_controller' => 'CommercialAds\\UserBundle\\Controller\\DefaultController::perfilAction',  '_route' => 'user_profile',);
        }

        // user_registration_confirmation
        if (0 === strpos($pathinfo, '/confirmar-registro') && preg_match('#^/confirmar\\-registro/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_registration_confirmation')), array (  '_controller' => 'CommercialAds\\UserBundle\\Controller\\DefaultController::confirmRegistrationAction',));
        }

        // user_email_resetpass
        if ($pathinfo === '/email-password') {
            return array (  '_controller' => 'CommercialAds\\UserBundle\\Controller\\DefaultController::emailResetPassAction',  '_route' => 'user_email_resetpass',);
        }

        if (0 === strpos($pathinfo, '/reset-password')) {
            // user_reset_password
            if (preg_match('#^/reset\\-password/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_reset_password')), array (  '_controller' => 'CommercialAds\\UserBundle\\Controller\\DefaultController::resetPasswordAction',));
            }

            // user_reset_pass_default
            if ($pathinfo === '/reset-password') {
                return array (  '_controller' => 'CommercialAds\\UserBundle\\Controller\\DefaultController::resetPassDefaultAction',  '_route' => 'user_reset_pass_default',);
            }

        }

        // user_register_confirmation
        if ($pathinfo === '/confirmar-registro') {
            return array (  '_controller' => 'CommercialAds\\UserBundle\\Controller\\DefaultController::registrationConfirmationAction',  '_route' => 'user_register_confirmation',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // user_login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'user_login_check');
            }

            // user_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'user_logout');
            }

        }

        // advertisers_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'advertisers_homepage')), array (  '_controller' => 'CommercialAdsAdvertisersBundle:Default:index',));
        }

        // searchEngine
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::searchAction',  '_route' => 'searchEngine',);
        }

        // searchResults
        if ($pathinfo === '/resultados') {
            return array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::resultsAction',  '_route' => 'searchResults',);
        }

        // ad
        if (preg_match('#^/(?P<region>[^/]++)/(?P<city>[^/]++)/(?P<category>[^/]++)/(?P<subcategory>[^/]++)/anuncio(?:\\-(?P<slug>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::adAction',  'slug' => '',));
        }

        // ad_by_coord
        if (0 === strpos($pathinfo, '/mi-ubicacion') && preg_match('#^/mi\\-ubicacion/(?P<lat>[^/]++)/(?P<lng>[^/]++)/(?P<category>[^/]++)/(?P<subcategory>[^/]++)/aviso(?:\\-(?P<slug>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_by_coord')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::adByCoordsAction',  'slug' => '',));
        }

        // back_to_filter
        if (preg_match('#^/(?P<region>[^/]++)/(?P<city>[^/]++)/rubro\\-(?P<subcat>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_to_filter')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::adsByCityAction',));
        }

        if (0 === strpos($pathinfo, '/mi-ubicacion')) {
            // back_filters_coords
            if (preg_match('#^/mi\\-ubicacion/(?P<lat>[^/]++)/(?P<lng>[^/]++)/(?P<category>[^/]++)/(?P<subcategory>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_filters_coords')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::adsCoordsAction',));
            }

            // my_location
            if ($pathinfo === '/mi-ubicacion') {
                return array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::adsByGeolocationAction',  '_route' => 'my_location',);
            }

        }

        if (0 === strpos($pathinfo, '/anunciantes')) {
            // advertiser_register
            if ($pathinfo === '/anunciantes/registro') {
                return array (  '_controller' => 'CommercialAdsAdvertisersBundle:Default:registro',  'user' => '',  '_route' => 'advertiser_register',);
            }

            if (0 === strpos($pathinfo, '/anunciantes/cargar-')) {
                // load_cities_ajax
                if ($pathinfo === '/anunciantes/cargar-localidades') {
                    return array (  '_controller' => 'CommercialAdsAdvertisersBundle:Default:loadCities',  '_route' => 'load_cities_ajax',);
                }

                // load_subcategories_ajax
                if ($pathinfo === '/anunciantes/cargar-subcategorias') {
                    return array (  '_controller' => 'CommercialAdsAdvertisersBundle:Default:loadSubcategories',  '_route' => 'load_subcategories_ajax',);
                }

            }

            // advertiser_panel
            if ($pathinfo === '/anunciantes/panel') {
                return array (  '_controller' => 'CommercialAdsAdvertisersBundle:Default:panel',  '_route' => 'advertiser_panel',);
            }

            // advertiser_profile
            if ($pathinfo === '/anunciantes/datos-perfil') {
                return array (  '_controller' => 'CommercialAdsAdvertisersBundle:Default:advertiserProfile',  '_route' => 'advertiser_profile',);
            }

            if (0 === strpos($pathinfo, '/anunciantes/publicar')) {
                // publish_ad
                if ($pathinfo === '/anunciantes/publicar') {
                    return array (  '_controller' => 'CommercialAdsAdvertisersBundle:Default:publishAd',  '_route' => 'publish_ad',);
                }

                // enable_ad
                if (preg_match('#^/anunciantes/publicar\\-(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'enable_ad')), array (  '_controller' => 'CommercialAdsAdvertisersBundle:Default:enable',));
                }

            }

            // my_ads
            if ($pathinfo === '/anunciantes/mis-anuncios') {
                return array (  '_controller' => 'CommercialAdsAdvertisersBundle:Default:panelAds',  '_route' => 'my_ads',);
            }

            // disable_ad
            if (0 === strpos($pathinfo, '/anunciantes/desactivar') && preg_match('#^/anunciantes/desactivar\\-(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'disable_ad')), array (  '_controller' => 'CommercialAdsAdvertisersBundle:Default:disable',));
            }

            // delete_ad
            if (0 === strpos($pathinfo, '/anunciantes/eliminar') && preg_match('#^/anunciantes/eliminar\\-(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_ad')), array (  '_controller' => 'CommercialAdsAdvertisersBundle:Default:deleteAd',));
            }

        }

        // ad_subcategory
        if (preg_match('#^/(?P<category>[^/]++)/(?P<subcategory>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_subcategory')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::filteredAdsAction',));
        }

        // ad_region_subcat
        if (preg_match('#^/(?P<region>[^/]++)/(?P<category>[^/]++)/(?P<subcategory>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_region_subcat')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::adsByRegionAction',));
        }

        // ad_city_subcat
        if (preg_match('#^/(?P<region>[^/]++)/(?P<city>[^/]++)/(?P<category>[^/]++)/(?P<subcategory>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_city_subcat')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::adsByCityAction',));
        }

        // ad_city
        if (preg_match('#^/(?P<region>[^/]++)/(?P<city>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ad_city');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_city')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::adsByCityAction',  'subcategory' => '',));
        }

        // ad_region
        if (preg_match('#^/(?P<region>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_region')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::adsByRegionAction',  'subcategory' => '',));
        }

        if (0 === strpos($pathinfo, '/mi-ubicacion')) {
            // near_coords
            if (preg_match('#^/mi\\-ubicacion/(?P<lat>[^/]++)/(?P<lng>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'near_coords');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'near_coords')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::adsCoordsAction',  'subcategory' => NULL,));
            }

            // near_coords_subcat
            if (preg_match('#^/mi\\-ubicacion/(?P<lat>[^/]++)/(?P<lng>[^/]++)/(?P<category>[^/]++)/(?P<subcategory>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'near_coords_subcat')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::adsCoordsAction',));
            }

        }

        // main
        if (preg_match('#^/(?P<region>[^/]++)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'main')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::indexAction',  'region' => '',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
