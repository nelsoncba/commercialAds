angular.module('Ads')
        .controller('MainCtrl', function ($rootScope,$state, $scope, AdService) {
            $scope.ads = [];
            $scope.init = function(){
                getAds();
            }
            
            $scope.paged = function(newPage){
                $rootScope.currentPage = newPage;
                getAds();
            };

            var getAds = function(){
                AdService.getAds($rootScope.currentPage).success(function(data){
                    $scope.isload = false;
                    $scope.ads = data.items;
                    $scope.totalPages = Math.ceil(data.total_count/$scope.perPage);
                }).error(function(error){

                });
            }
        })
        .controller('AdsBySubcategoryCtrl',function ($rootScope, $scope, $state, AdService) {
            $scope.ads = [];
            $scope.paged = function(newPage){
                $scope.currentPage = newPage;
            };
            console.log('algo ', $rootScope.subcategorySlug)
            AdService.getBySubcategory($rootScope.subcategorySlug).success(function(data){
                $scope.ads= data.items;
                $scope.totalPages = Math.ceil(data.total_count/$scope.perPage);
            }).error(function(error){

            });
        })
        .controller('AdsByRegionCtrl', function ($rootScope, $scope, $state, AdService) {
            //$rootScope.regionSlug = $state.params.region;
            if($state.params.subcategory)
                $rootScope.subcategorySlug = $state.params.subcategory;

            $scope.ads = [];
            $scope.paged = function(newPage){
                $scope.currentPage = newPage;
            };

            AdService.getByRegion($scope.regionSlug, $scope.subcategorySlug).success(function(data){
                $scope.ads = data.ads.items;
                if(data.region)
                    $rootScope.regionFilter = data.region.name;
                if(data.subcategory)
                    $rootScope.subcategoryFilter = data.subcategory.name;
                $scope.totalPages = Math.ceil(data.ads.total_count/$scope.perPage);
            }).error(function(error){

            });
        })
        .controller('AdsByCityCtrl', function ($rootScope, $scope, AdService) {
            $rootScope.regionFilter = $rootScope.regionFilter;
            $scope.ads = [];
            $scope.paged = function(newPage){
                $scope.currentPage = newPage;
            };

            AdService.getByCity($rootScope.citySlug, $rootScope.subcategorySlug).success(function(data){
                $scope.ads= data.ads.items;
                if(data.city)
                    $rootScope.regionFilter = data.city.region.name;
                    $rootScope.cityFilter = data.city.name;
                if(data.subcategory)
                    $rootScope.subcategoryFilter = data.subcategory.name;
                $scope.totalPages = Math.ceil(data.total_count/$scope.perPage);
            }).error(function(error){
                $scope.error = error.error;
                console.log(error.error)
                if(error.city)
                    $rootScope.regionFilter = error.city.region.name;
                    $rootScope.cityFilter = error.city.name;
                if(error.subcategory)
                    $rootScope.subcategoryFilter = error.subcategory.name;
            });
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
            

            $http.get('api/categories/list/region='+$rootScope.regionSlug+'/city='+$rootScope.citySlug).then(function(response){
                $scope.categories = response.data;
            });

            $http.get('api/subcategories/list/region='+$rootScope.regionSlug+'/city='+$rootScope.citySlug).then(function(response){
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

            $scope.selectItem = function(item, category_slug,event){
                angular.element(event.currentTarget).toggleClass('active').children('ul').collapse('toggle');
                angular.element(event.currentTarget).siblings().removeClass('active').children('ul.in').collapse('hide');
                $scope.selectedItem = item;
                $rootScope.categorySlug = category_slug;
            }

        });


