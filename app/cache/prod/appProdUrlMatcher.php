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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
