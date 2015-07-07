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

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/ad')) {
                // commercialads_advertiser_apiadvertiser_panel
                if ($pathinfo === '/api/advertiser-panel') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_commercialads_advertiser_apiadvertiser_panel;
                    }

                    return array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::panelAction',  '_route' => 'commercialads_advertiser_apiadvertiser_panel',);
                }
                not_commercialads_advertiser_apiadvertiser_panel:

                // commercialads_advertiser_apiadvertiser_publishad
                if ($pathinfo === '/api/ad-creation') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_commercialads_advertiser_apiadvertiser_publishad;
                    }

                    return array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::publishAdAction',  '_route' => 'commercialads_advertiser_apiadvertiser_publishad',);
                }
                not_commercialads_advertiser_apiadvertiser_publishad:

                if (0 === strpos($pathinfo, '/api/advertiser')) {
                    // commercialads_advertiser_apiadvertiser_registration
                    if ($pathinfo === '/api/advertiser/registration') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_commercialads_advertiser_apiadvertiser_registration;
                        }

                        return array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::registrationAction',  '_route' => 'commercialads_advertiser_apiadvertiser_registration',);
                    }
                    not_commercialads_advertiser_apiadvertiser_registration:

                    // commercialads_advertiser_apiadvertiser_advertiserprofile
                    if ($pathinfo === '/api/advertiser-profile') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_commercialads_advertiser_apiadvertiser_advertiserprofile;
                        }

                        return array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::advertiserProfileAction',  '_route' => 'commercialads_advertiser_apiadvertiser_advertiserprofile',);
                    }
                    not_commercialads_advertiser_apiadvertiser_advertiserprofile:

                }

            }

            // commercialads_advertiser_apiadvertiser_panelads
            if ($pathinfo === '/api/my-ads') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_commercialads_advertiser_apiadvertiser_panelads;
                }

                return array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::panelAdsAction',  '_route' => 'commercialads_advertiser_apiadvertiser_panelads',);
            }
            not_commercialads_advertiser_apiadvertiser_panelads:

            if (0 === strpos($pathinfo, '/api/o')) {
                // commercialads_advertiser_apiadvertiser_disable
                if (0 === strpos($pathinfo, '/api/off-ad') && preg_match('#^/api/off\\-ad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_commercialads_advertiser_apiadvertiser_disable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commercialads_advertiser_apiadvertiser_disable')), array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::disableAction',));
                }
                not_commercialads_advertiser_apiadvertiser_disable:

                // commercialads_advertiser_apiadvertiser_enabled
                if (0 === strpos($pathinfo, '/api/on-ad') && preg_match('#^/api/on\\-ad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_commercialads_advertiser_apiadvertiser_enabled;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commercialads_advertiser_apiadvertiser_enabled')), array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::enabledAction',));
                }
                not_commercialads_advertiser_apiadvertiser_enabled:

            }

            // commercialads_advertiser_apiadvertiser_deletead
            if (0 === strpos($pathinfo, '/api/removing-ad') && preg_match('#^/api/removing\\-ad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_commercialads_advertiser_apiadvertiser_deletead;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commercialads_advertiser_apiadvertiser_deletead')), array (  '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::deleteAdAction',));
            }
            not_commercialads_advertiser_apiadvertiser_deletead:

            if (0 === strpos($pathinfo, '/api/a')) {
                // commercialads_ad_apiad_getall
                if (0 === strpos($pathinfo, '/api/allAds') && preg_match('#^/api/allAds/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_commercialads_ad_apiad_getall;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commercialads_ad_apiad_getall')), array (  'perPage' => 5,  '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::getAllAction',));
                }
                not_commercialads_ad_apiad_getall:

                if (0 === strpos($pathinfo, '/api/ad')) {
                    // single_Ad
                    if (preg_match('#^/api/ad/(?P<city>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_single_Ad;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'single_Ad')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::getAdAction',));
                    }
                    not_single_Ad:

                    if (0 === strpos($pathinfo, '/api/ads')) {
                        // ads_by_coords
                        if (0 === strpos($pathinfo, '/api/ads/coords') && preg_match('#^/api/ads/coords/(?P<lat>[^/]++)/(?P<lng>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ads_by_coords;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ads_by_coords')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::adsByCoordsAction',));
                        }
                        not_ads_by_coords:

                        // commercialads_ad_apiad_adsbyregion
                        if (0 === strpos($pathinfo, '/api/ads/region') && preg_match('#^/api/ads/region\\=(?P<region>[^/]++)/subcategory\\=(?P<subcategory>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_commercialads_ad_apiad_adsbyregion;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'commercialads_ad_apiad_adsbyregion')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::adsByRegionAction',));
                        }
                        not_commercialads_ad_apiad_adsbyregion:

                        // commercialads_ad_apiad_adsbycity
                        if (0 === strpos($pathinfo, '/api/ads/city') && preg_match('#^/api/ads/city\\=(?P<city>[^/]++)/subcategory\\=(?P<subcategory>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_commercialads_ad_apiad_adsbycity;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'commercialads_ad_apiad_adsbycity')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::adsByCityAction',));
                        }
                        not_commercialads_ad_apiad_adsbycity:

                        // commercialads_ad_apiad_adsbysubcategory
                        if (0 === strpos($pathinfo, '/api/ads/subcategory') && preg_match('#^/api/ads/subcategory\\=(?P<subcategory>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_commercialads_ad_apiad_adsbysubcategory;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'commercialads_ad_apiad_adsbysubcategory')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::adsBySubcategoryAction',));
                        }
                        not_commercialads_ad_apiad_adsbysubcategory:

                        // commercialads_ad_apiad_adsbygeolocation
                        if (0 === strpos($pathinfo, '/api/ads/geolocation') && preg_match('#^/api/ads/geolocation/(?P<lat>[^/]++)/(?P<lng>[^/]++)/(?P<address>[^/]++)/(?P<category>[^/]++)/(?P<subcategory>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_commercialads_ad_apiad_adsbygeolocation;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'commercialads_ad_apiad_adsbygeolocation')), array (  '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::adsByGeolocationAction',));
                        }
                        not_commercialads_ad_apiad_adsbygeolocation:

                    }

                }

            }

            // commercialads_filter_apifilter_regionslist
            if ($pathinfo === '/api/regions/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_commercialads_filter_apifilter_regionslist;
                }

                return array (  '_controller' => 'CommercialAds\\FilterBundle\\Controller\\ApiFilterController::regionsListAction',  '_route' => 'commercialads_filter_apifilter_regionslist',);
            }
            not_commercialads_filter_apifilter_regionslist:

            if (0 === strpos($pathinfo, '/api/c')) {
                // commercialads_filter_apifilter_citieslist
                if (0 === strpos($pathinfo, '/api/cities/list/region') && preg_match('#^/api/cities/list/region\\=(?P<region>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commercialads_filter_apifilter_citieslist')), array (  '_controller' => 'CommercialAds\\FilterBundle\\Controller\\ApiFilterController::citiesListAction',));
                }

                // commercialads_filter_apifilter_categorieslist
                if (0 === strpos($pathinfo, '/api/categories/list/region') && preg_match('#^/api/categories/list/region\\=(?P<region>[^/]++)/city\\=(?P<city>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_commercialads_filter_apifilter_categorieslist;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commercialads_filter_apifilter_categorieslist')), array (  '_controller' => 'CommercialAds\\FilterBundle\\Controller\\ApiFilterController::categoriesList',));
                }
                not_commercialads_filter_apifilter_categorieslist:

            }

            // commercialads_filter_apifilter_subcategorieslist
            if (0 === strpos($pathinfo, '/api/subcategories/list/region') && preg_match('#^/api/subcategories/list/region\\=(?P<region>[^/]++)/city\\=(?P<city>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_commercialads_filter_apifilter_subcategorieslist;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commercialads_filter_apifilter_subcategorieslist')), array (  '_controller' => 'CommercialAds\\FilterBundle\\Controller\\ApiFilterController::subcategoriesList',));
            }
            not_commercialads_filter_apifilter_subcategorieslist:

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
