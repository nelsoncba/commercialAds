<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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
                return array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\DefaultController::registrationAction',  'user' => '',  '_route' => 'advertiser_register',);
            }

            if (0 === strpos($pathinfo, '/anunciantes/cargar-')) {
                // load_cities_ajax
                if ($pathinfo === '/anunciantes/cargar-localidades') {
                    return array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\DefaultController::loadCitiesAction',  '_route' => 'load_cities_ajax',);
                }

                // load_subcategories_ajax
                if ($pathinfo === '/anunciantes/cargar-subcategorias') {
                    return array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\DefaultController::loadSubcategoriesAction',  '_route' => 'load_subcategories_ajax',);
                }

            }

            // advertiser_panel
            if ($pathinfo === '/anunciantes/panel') {
                return array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\DefaultController::panelAction',  '_route' => 'advertiser_panel',);
            }

            // advertiser_profile
            if ($pathinfo === '/anunciantes/datos-perfil') {
                return array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\DefaultController::advertiserProfileAction',  '_route' => 'advertiser_profile',);
            }

            if (0 === strpos($pathinfo, '/anunciantes/publicar')) {
                // publish_ad
                if ($pathinfo === '/anunciantes/publicar') {
                    return array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\DefaultController::publishAdAction',  '_route' => 'publish_ad',);
                }

                // enable_ad
                if (preg_match('#^/anunciantes/publicar\\-(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'enable_ad')), array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\DefaultController::enableAction',));
                }

            }

            // my_ads
            if ($pathinfo === '/anunciantes/mis-anuncios') {
                return array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\DefaultController::panelAdsAction',  '_route' => 'my_ads',);
            }

            // disable_ad
            if (0 === strpos($pathinfo, '/anunciantes/desactivar') && preg_match('#^/anunciantes/desactivar\\-(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'disable_ad')), array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\DefaultController::disableAction',));
            }

            // delete_ad
            if (0 === strpos($pathinfo, '/anunciantes/eliminar') && preg_match('#^/anunciantes/eliminar\\-(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_ad')), array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\DefaultController::deleteAdAction',));
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
