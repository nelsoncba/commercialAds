angular.module('Ads')
		.service('WebService', function ($http) {
			this.request = function(method, path, data){
				return $http({
						method: method,
						url: './api/' +  path,
						data: data
						}).success(function(data){
							return data;
						}).error(function(data){
							return data;
						});
			}
		});