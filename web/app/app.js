angular.module('Ads',['ui.router','simplePagination', 'NgPager'])
        .run(function ($rootScope, PagerConfig) {
    
            $rootScope.regionSlug = $rootScope.citySlug = $rootScope.categorySlug = $rootScope.subcategorySlug = 0;
            //$rootScope.regionFilter = $rootScope.cityFilter = $rootScope.subcategoryFilter = null;
            //pagination parameters
            PagerConfig.setBase1();
            PagerConfig.enableJumpControls();
            $rootScope.currentPage = 1;
            $rootScope.maxPagesToDisplay = 5;
            $rootScope.perPage = 5;

            // angular.element('#side-menu').metisMenu();
            $rootScope.$on("$stateChangeStart", function(event, toState, toParams, fromState, fromParams){
                
                if(toState.name == 'root'){
                    if(!toParams.subcategory){
                        $rootScope.regionFilter = $rootScope.cityFilter = $rootScope.subcategoryFilter = null;
                        $rootScope.regionSlug = $rootScope.categorySlug = $rootScope.subcategorySlug = 0;
                    }
                }
                /*if(toParams.region){
                    $rootScope.regionSlug = toParams.region;
                    if(toParams.city == null){
                        $rootScope.citySlug = 0;
                        $rootScope.cityFilter = null;
                    }
                    if(toParams.subcategory == null){
                        $rootScope.subcategorySlug = 0;
                        $rootScope.subcategoryFilter = null;
                    }
                }
                if(toParams.city){
                    $rootScope.citySlug = toParams.city;
                    if(toParams.subcategory == null){
                        $rootScope.subcategorySlug = 0;
                        $rootScope.subcategoryFilter = null;
                    }
                }
                if(toParams.category && toParams.subcategory){
                     $rootScope.categorySlug = toParams.category;
                     $rootScope.subcategorySlug = toParams.subcategory;
                     if(toParams.region == null){
                         $rootScope.regionSlug = 0;
                         $rootScope.regionFilter = null;
                     }
                }*/
                if(toState.name == 'root.filter-region'){
                    $rootScope.regionSlug = toParams.region;
                    if(toParams.city == null){
                        $rootScope.citySlug = 0;
                        $rootScope.cityFilter = null;
                    }
                    if(toParams.subcategory == null){
                        $rootScope.subcategorySlug = 0;
                        $rootScope.subcategoryFilter = null;
                    }
                }
                if(toState.name == 'root.filter-city'){
                    $rootScope.citySlug = toParams.city;
                    if(toParams.subcategory == null){
                        $rootScope.subcategorySlug = 0;
                        $rootScope.subcategoryFilter = null;
                    }
                }
                if(toState.name == 'root.filter-subcat'){
                    $rootScope.categorySlug = toParams.category;
                     $rootScope.subcategorySlug = toParams.subcategory;
                     if(toParams.city == null){
                         $rootScope.citySlug = 0;
                         $rootScope.cityFilter= null;
                     }
                     if(toParams.region == null){
                         $rootScope.regionSlug = 0;
                         $rootScope.regionFilter = null;
                     }
                }
                if(toState.name == 'root.filter-city-subcat'){
                    $rootScope.regionSlug = toParams.region;
                    $rootScope.citySlug = toParams.city;
                    $rootScope.subcategorySlug = toParams.subcategory;
                }
                if(toParams.name == 'root.filter-region-subcat'){
                    $rootScope.regionSlug = toParams.region;
                    $rootScope.subcategorySlug = toParams.subcategory;
                    if(toParams.city == null){
                        $rootScope.citySlug = 0;
                        $rootScope.cityFilter = null;
                    }
                }
   
            });
        })
        .config(function($stateProvider, $urlRouterProvider, $locationProvider){
            $stateProvider
            .state('root',{
               url: '/',
               views:{
                    'header' : {
                       templateUrl:  'app/view/header.html'
                    },
                    'container@':{
                        templateUrl: 'app/view/container.html'
                    },
                    'main@root':{
                        templateUrl: 'app/view/main.html',
                        controller:  'MainCtrl'
                    },
                    'side@root' : {
                        templateUrl: 'app/view/sidebar.html',
                        controller: 'FilterCtrl'
                    }
               }
            })
            .state('root.filter-region',{
                url: 'region-:region',
                views:{
                    'main@root':{
                        templateUrl: 'app/view/main.html',
                        controller:  'AdsByRegionCtrl'
                    },
                    'side@root' : {
                        templateUrl: 'app/view/sidebar.html',
                        controller: 'FilterCtrl'
                    }
                }
            })
            .state('root.filter-city',{
                url: 'region-:region/localidad-:city',
                views:{
                    'main@root':{
                        templateUrl: 'app/view/main.html',
                        controller:  'AdsByCityCtrl'
                    },
                    'side@root' : {
                        templateUrl: 'app/view/sidebar.html',
                        controller: 'FilterCtrl'
                    }
                }
            })
            .state('root.filter-subcat',{
                url: 'anuncios-de-:category::subcategory',
                views:{
                    'main@root':{
                        templateUrl: 'app/view/main.html',
                        controller:  'AdsBySubcategoryCtrl'
                    },
                    'side@root' : {
                        templateUrl: 'app/view/sidebar.html',
                        controller: 'FilterCtrl'
                    }
                }
            })
            .state('root.filter-region-subcat',{
                url: 'region-:region/avisos-de-:category::subcategory',
                views:{
                    'main@root':{
                        templateUrl: 'app/view/main.html',
                        controller:  'AdsByRegionCtrl'
                    },
                    'side@root' : {
                        templateUrl: 'app/view/sidebar.html',
                        controller: 'FilterCtrl'
                    }
                }
            })
            .state('root.filter-city-subcat',{
                url: 'region-:region/localidad-:city/avisos-de-:category::subcategory',
                views:{
                    'main@root':{
                        templateUrl: 'app/view/main.html',
                        controller:  'AdsByCityCtrl'
                    },
                    'side@root' : {
                        templateUrl: 'app/view/sidebar.html',
                        controller: 'FilterCtrl'
                    }
                }
            });
            $urlRouterProvider.otherwise('/');
        });
        