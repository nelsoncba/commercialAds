angular.module('Ads',['ui.router','simplePagination', 'NgPager'])
        .run(function ($rootScope, PagerConfig, $state, $timeout, PaginateService) {
    
            $rootScope.regionSlug = $rootScope.citySlug = $rootScope.categorySlug = $rootScope.subcategorySlug = 0;
            //$rootScope.regionFilter = $rootScope.cityFilter = $rootScope.subcategoryFilter = null;
            //pagination parameters
            PagerConfig.setBase1();
            PagerConfig.enableJumpControls();
            $rootScope.currentPage = 1;
            $rootScope.maxPagesToDisplay = 5;
            $rootScope.perPage = 5;
            
            $rootScope.$on("$stateChangeStart", function(event, toState, toParams, fromState, fromParams){
                switch (toState.name){
                    case 'root':
                        if(!toParams.subcategory){
                           $rootScope.regionFilter = $rootScope.cityFilter = $rootScope.subcategoryFilter = null;
                           $rootScope.regionSlug = $rootScope.categorySlug = $rootScope.subcategorySlug = 0;
                        }
                        break;
                    case 'root.filter-region':
                        $rootScope.currentPage = 1;
                        $rootScope.regionSlug = toParams.region;
                        $rootScope.citySlug = $rootScope.subcategorySlug = 0;
                        $rootScope.cityFilter = $rootScope.subcategoryFilter = null;
                        break;
                    case 'root.filter-city':
                        $rootScope.currentPage = 1;
                        $rootScope.citySlug = toParams.city;
                        $rootScope.subcategorySlug = 0;
                        $rootScope.subcategoryFilter = null;
                        break;
                    case 'root.filter-subcat':
                        $rootScope.currentPage = 1;
                        $rootScope.categorySlug = toParams.category;
                        $rootScope.subcategorySlug = toParams.subcategory;
                        $rootScope.regionSlug = $rootScope.citySlug = 0;
                        $rootScope.regionFilter = $rootScope.cityFilter= null;
                        break;
                    case 'root.filter-region-subcat':
                        $rootScope.currentPage = 1;
                        $rootScope.regionSlug = toParams.region;
                        $rootScope.categorySlug = toParams.category;
                        $rootScope.subcategorySlug = toParams.subcategory;
                        $rootScope.citySlug = 0;
                        $rootScope.cityFilter = null;
                        break;
                    case 'root.filter-city-subcat':
                        $rootScope.currentPage = 1;
                        $rootScope.regionSlug = toParams.region;
                        $rootScope.citySlug = toParams.city;
                        $rootScope.subcategorySlug = toParams.subcategory;
                        break;
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
        