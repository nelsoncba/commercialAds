angular.module('Ads')
		.factory('AdService', function (WebService) {
		
			return {
				getAds: function(page){
					return WebService.request('GET', 'allAds/' + page).success(function(data){
						return data;
					}).error(function(error){
						return error;
					});
				},
				getByRegion: function(region, subcategory){
					return WebService.request('GET', 'ads/region='+ region +'/subcategory='+ subcategory).success(function(data){
		                return data;
		            }).error(function(error){
		            	return error;
		            });
				},
				getByCity: function(city, subcategory){
					return WebService.request('GET', 'ads/city='+ city +'/subcategory='+ subcategory).success(function(data){
		                return data;
		            }).error(function(error){
		            	return error;
		            });
				},
				getBySubcategory: function(subcategory){
					return WebService.request('GET', 'ads/subcategory=' + subcategory).success(function(data){
		                return data;
		            }).error(function(error){
		            	return error;
		            });
				}
			};
		});