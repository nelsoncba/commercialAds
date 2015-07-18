angular.module('Ads')
		.service('PaginateService', function($rootScope, $state) {
			this.getPage = function(event){
				  console.log($rootScope.currentPage);
                    console.log($state.current.name);
                    
                    
                    
				var params = null;
				switch($state.current.name){
					case 'root':
						params = null;
					 	break;
					case 'root.filter-region':
						params = {region: $state.params.region};
						break;
				}
				console.log(params);
				console.log($state.go($state.current.name, params, { reload: false}));
			    $state.go($state.$current.name,params,{inherit:false});
			    return null;
			}
		});