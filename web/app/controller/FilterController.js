angular.module('Ads')
        .controller('MainCtrl', function ($rootScope,$state, $scope, AdService) {
            $scope.ads = [];
            getAds();
 
            $scope.paged = function(newPage){
                $rootScope.currentPage = newPage;
                getAds();
            };

            function getAds(){
                AdService.getAds($rootScope.currentPage).success(function(data){
                    $scope.isload = false;
                    $scope.ads = data.items;
                    $scope.totalPages = Math.ceil(data.total_count/$scope.perPage);
                }).error(function(error){

                });
            }
        })
        .controller('AdsByRegionCtrl', function ($rootScope, $scope, $state, AdService) {
            //$rootScope.regionSlug = $state.params.region;
            if($state.params.subcategory)
                $rootScope.subcategorySlug = $state.params.subcategory;
            getAds();
            $scope.ads = [];
            $scope.paged = function(newPage){
                $scope.currentPage = newPage;
                getAds();
            };
            
            
            function getAds(){
                AdService.getByRegion($scope.regionSlug, $scope.subcategorySlug, $scope.currentPage).success(function(data){
                    $scope.ads = data.ads.items;
                    if(data.region)
                        $rootScope.regionFilter = data.region.name;
                    if(data.subcategory)
                        $rootScope.subcategoryFilter = data.subcategory.name;
                    $scope.totalPages = Math.ceil(data.ads.total_count/$scope.perPage);
                }).error(function(error){

                });
            }
        })
        .controller('AdsByCityCtrl', function ($rootScope, $scope, AdService) {
            $rootScope.regionFilter = $rootScope.regionFilter;
            $scope.ads = [];
            getAds();
            $scope.paged = function(newPage){
                $scope.currentPage = newPage;
                getAds();
            };
            
            function getAds(){
                AdService.getByCity($rootScope.citySlug, $rootScope.subcategorySlug, $scope.currentPage).success(function(data){
                    $scope.ads= data.ads.items;
                    if(data.city)
                        $rootScope.regionFilter = data.city.region.name;
                        $rootScope.cityFilter = data.city.name;
                    if(data.subcategory)
                        $rootScope.subcategoryFilter = data.subcategory.name;
                    $scope.totalPages = Math.ceil(data.ads.total_count/$scope.perPage);
                }).error(function(error){
                    $scope.error = error.error;
                    console.log(error.error)
                    if(error.city)
                        $rootScope.regionFilter = error.city.region.name;
                        $rootScope.cityFilter = error.city.name;
                    if(error.subcategory)
                        $rootScope.subcategoryFilter = error.subcategory.name;
                });
            }
        })
        .controller('AdsBySubcategoryCtrl',function ($rootScope, $scope, $state, AdService) {
            $rootScope.subcategoryFilter = $rootScope.subcategoryFilter;
            $scope.ads = [];
            getAds();
            $scope.paged = function(newPage){
                $scope.currentPage = newPage;
                getAds();
            };
            console.log($state.current.name);
            function getAds(){
                AdService.getBySubcategory($rootScope.subcategorySlug, $scope.currentPage).success(function(data){
                    $scope.ads= data.ads.items;
                    $scope.totalPages = Math.ceil(data.ads.total_count/$scope.perPage);
                    if(data.region)
                        $rootScope.regionFilter = data.region.name;
                    if(data.city)
                        $rootScope.cityFilter = data.city.name;
                    if(data.subcategory)
                        $rootScope.subcategoryFilter = data.subcategory.name;
                }).error(function(error){

                });
            }
        })
        .controller('FilterCtrl',function($rootScope, $scope, $state, $http){
            //angular.element('#side-menu').metisMenu();
            /*if($state.$current.name == 'root')
                $rootScope.regionSlug = $rootScope.citySlug = $rootScope.subcategorySlug = 0;
            if($state.$current.name == 'root.filter-region')
                $scope.citySlug = $scope.subcategorySlug = 0;
            if($state.$current.name == 'root.filter-city')
                $rootScope.subcategorySlug = 0;
            if($state.$current.name == 'root.filter-subcat')
                $rootScope.regionSlug = $rootScope.citySlug = 0;*/
            console.log($state.params.region);
            console.log($state.params.city);
            var region = $state.params.region !== undefined ? $state.params.region : 0;
            var city = $state.params.region !== undefined ? $state.params.region : 0;
            $http.get('api/categories/list/region='+region+'/city='+city).then(function(response){
                $scope.categories = response.data;
            });

            $http.get('api/subcategories/list/region='+region+'/city='+city).then(function(response){
                $scope.subcategories = response.data;
            });

            if(!$rootScope.regionSlug){
                $http.get('api/regions/list').then(function(response){
                    $scope.regions = response.data;
                });
            }

            if($rootScope.regionSlug){
                $http.get('api/cities/list/region=' + $state.params.region).then(function(response){
                    $scope.cities = response.data;
                });
            }
            
            //accordion menu function
            $scope.selectItem = function(category_slug,event){
                angular.element(event.currentTarget).toggleClass('active').children('ul').collapse('toggle');
                angular.element(event.currentTarget).siblings().removeClass('active').children('ul.in').collapse('hide');
                $rootScope.categorySlug = category_slug;
            }
            
            //close crumbs
            $scope.crumbregionclose = function(){
                if(!$state.params.subcategory){
                    $state.go('root');
                }
                if($state.params.subcategory){
                    $state.go('root.filter-subcat',{category: $state.params.category,subcategory:$state.params.subcategory},{inherit:false});
                }     
            }
            $scope.crumbcityclose = function(){
                if($state.params.city && !$state.params.subcategory){
                    $state.go('root.filter-region',{region: $state.params.region},{inherit:false});
                }
                if($state.params.region && $state.params.subcategory){
                    $state.go('root.filter-region-subcat',{region: $state.params.region, category: $state.params.category, subcategory: $state.params.subcategory},{inherit:false});
                }
            }
            $scope.crumbsubcatclose = function(){
                console.log($state.current.name);
                
                if($state.params.region && !$state.params.city){
                    $rootScope.subcategorySlug = 0;
                    $state.go('root.filter-region',{region: $state.params.region},{inherit:false});           
                }
                if($state.params.city){
                    $state.go('root.filter-city',{region: $state.params.region , city: $state.params.city},{inherit:false});
                }
                if($state.params.subcategory && !$state.params.region && !$state.params.city){
                    $state.go('root');
                }
                console.log($state.params.subcategory);
            }
        
        });


