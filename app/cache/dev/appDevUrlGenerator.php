<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommercialAds\\AdBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'commercialads_advertiser_apiadvertiser_panel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::panelAction',  ),  2 =>   array (    '_method' => 'Get',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/advertiser-panel',    ),  ),  4 =>   array (  ),),
        'commercialads_advertiser_apiadvertiser_publishad' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::publishAdAction',  ),  2 =>   array (    '_method' => 'POST',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/ad-creation',    ),  ),  4 =>   array (  ),),
        'commercialads_advertiser_apiadvertiser_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::registrationAction',  ),  2 =>   array (    '_method' => 'GET',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/advertiser/registration',    ),  ),  4 =>   array (  ),),
        'commercialads_advertiser_apiadvertiser_advertiserprofile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::advertiserProfileAction',  ),  2 =>   array (    '_method' => 'GET',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/advertiser-profile',    ),  ),  4 =>   array (  ),),
        'commercialads_advertiser_apiadvertiser_panelads' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::panelAdsAction',  ),  2 =>   array (    '_method' => 'GET',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/my-ads',    ),  ),  4 =>   array (  ),),
        'commercialads_advertiser_apiadvertiser_disable' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::disableAction',  ),  2 =>   array (    '_method' => 'PUT',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/off-ad',    ),  ),  4 =>   array (  ),),
        'commercialads_advertiser_apiadvertiser_enabled' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::enabledAction',  ),  2 =>   array (    '_method' => 'PUT',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/on-ad',    ),  ),  4 =>   array (  ),),
        'commercialads_advertiser_apiadvertiser_deletead' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CommercialAds\\AdvertiserBundle\\Controller\\ApiAdvertiserController::deleteAdAction',  ),  2 =>   array (    '_method' => 'DELETE',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/removing-ad',    ),  ),  4 =>   array (  ),),
        'commercialads_ad_apiad_getall' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'perPage' => 5,    '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::getAllAction',  ),  2 =>   array (    '_method' => 'GET',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/api/allAds',    ),  ),  4 =>   array (  ),),
        'single_Ad' => array (  0 =>   array (    0 => 'city',    1 => 'slug',  ),  1 =>   array (    '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::getAdAction',  ),  2 =>   array (    '_method' => 'GET',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'city',    ),    2 =>     array (      0 => 'text',      1 => '/api/ad',    ),  ),  4 =>   array (  ),),
        'ads_by_coords' => array (  0 =>   array (    0 => 'lat',    1 => 'lng',    2 => 'slug',  ),  1 =>   array (    '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::adsByCoordsAction',  ),  2 =>   array (    '_method' => 'GET',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'lng',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'lat',    ),    3 =>     array (      0 => 'text',      1 => '/api/ads/coords',    ),  ),  4 =>   array (  ),),
        'commercialads_ad_apiad_adsbyregion' => array (  0 =>   array (    0 => 'region',    1 => 'subcategory',    2 => 'page',  ),  1 =>   array (    'perPage' => 5,    '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::adsByRegionAction',  ),  2 =>   array (    '_method' => 'GET',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/page',    ),    2 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'subcategory',    ),    3 =>     array (      0 => 'text',      1 => '/subcategory',    ),    4 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'region',    ),    5 =>     array (      0 => 'text',      1 => '/api/ads/region',    ),  ),  4 =>   array (  ),),
        'commercialads_ad_apiad_adsbycity' => array (  0 =>   array (    0 => 'city',    1 => 'subcategory',    2 => 'page',  ),  1 =>   array (    'perPage' => 5,    '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::adsByCityAction',  ),  2 =>   array (    '_method' => 'GET',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/page',    ),    2 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'subcategory',    ),    3 =>     array (      0 => 'text',      1 => '/subcategory',    ),    4 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'city',    ),    5 =>     array (      0 => 'text',      1 => '/api/ads/city',    ),  ),  4 =>   array (  ),),
        'commercialads_ad_apiad_adsbysubcategory' => array (  0 =>   array (    0 => 'subcategory',    1 => 'page',  ),  1 =>   array (    '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::adsBySubcategoryAction',  ),  2 =>   array (    '_method' => 'GET',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/page',    ),    2 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'subcategory',    ),    3 =>     array (      0 => 'text',      1 => '/api/ads/subcategory',    ),  ),  4 =>   array (  ),),
        'commercialads_ad_apiad_adsbygeolocation' => array (  0 =>   array (    0 => 'lat',    1 => 'lng',    2 => 'address',    3 => 'category',    4 => 'subcategory',  ),  1 =>   array (    '_controller' => 'CommercialAds\\AdBundle\\Controller\\ApiAdController::adsByGeolocationAction',  ),  2 =>   array (    '_method' => 'GET',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'subcategory',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'address',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'lng',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'lat',    ),    5 =>     array (      0 => 'text',      1 => '/api/ads/geolocation',    ),  ),  4 =>   array (  ),),
        'commercialads_filter_apifilter_regionslist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommercialAds\\FilterBundle\\Controller\\ApiFilterController::regionsListAction',  ),  2 =>   array (    '_method' => 'GET',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/regions/list',    ),  ),  4 =>   array (  ),),
        'commercialads_filter_apifilter_citieslist' => array (  0 =>   array (    0 => 'region',  ),  1 =>   array (    '_controller' => 'CommercialAds\\FilterBundle\\Controller\\ApiFilterController::citiesListAction',  ),  2 =>   array (    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'region',    ),    1 =>     array (      0 => 'text',      1 => '/api/cities/list/region',    ),  ),  4 =>   array (  ),),
        'commercialads_filter_apifilter_categorieslist' => array (  0 =>   array (    0 => 'region',    1 => 'city',  ),  1 =>   array (    '_controller' => 'CommercialAds\\FilterBundle\\Controller\\ApiFilterController::categoriesList',  ),  2 =>   array (    '_method' => 'GET',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'city',    ),    1 =>     array (      0 => 'text',      1 => '/city',    ),    2 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'region',    ),    3 =>     array (      0 => 'text',      1 => '/api/categories/list/region',    ),  ),  4 =>   array (  ),),
        'commercialads_filter_apifilter_subcategorieslist' => array (  0 =>   array (    0 => 'region',    1 => 'city',  ),  1 =>   array (    '_controller' => 'CommercialAds\\FilterBundle\\Controller\\ApiFilterController::subcategoriesList',  ),  2 =>   array (    '_method' => 'GET',    'format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'city',    ),    1 =>     array (      0 => 'text',      1 => '/city',    ),    2 =>     array (      0 => 'variable',      1 => '=',      2 => '[^/]++',      3 => 'region',    ),    3 =>     array (      0 => 'text',      1 => '/api/subcategories/list/region',    ),  ),  4 =>   array (  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login',    ),  ),  4 =>   array (  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login_check',    ),  ),  4 =>   array (  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/logout',    ),  ),  4 =>   array (  ),),
        'acme_demo_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello/admin',    ),  ),  4 =>   array (  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),  4 =>   array (  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),  4 =>   array (  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
