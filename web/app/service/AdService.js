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
				getByRegion: function(region, subcategory, page){
					return WebService.request('GET', 'ads/region='+ region +'/subcategory='+ subcategory + '/page='+ page).success(function(data){
		                return data;
		            }).error(function(error){
		            	return error;
		            });
				},
				getByCity: function(city, subcategory, page){
					return WebService.request('GET', 'ads/city='+ city +'/subcategory='+ subcategory +'/page='+page).success(function(data){
		                return data;
		            }).error(function(error){
		            	return error;
		            });
				},
				getBySubcategory: function(subcategory, page){
					return WebService.request('GET', 'ads/subcategory=' + subcategory + '/page=' + page).success(function(data){
		                return data;
		            }).error(function(error){
		            	return error;
		            });
				}
			};
		});