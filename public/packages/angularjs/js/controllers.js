//controllers.js
'use strict';

var easyWineControllers = angular.module('easyWineControllers', []);
	// create angular controller


	easyWineControllers.controller('loginFormController', ['$scope', 	
		function($scope) {

		}
	]);

	easyWineControllers.controller('registerFormController', ['$scope' ,	
		function($scope) {
				
		}
	]);

	easyWineControllers.controller('accountFormController', ['$scope' ,	
		function($scope) {
				
		}
	]);

	easyWineControllers.controller('searchWineController', ['$scope', '$http',
		function($scope, $http) {
			$http({
				'method': 'POST',
				'url': window.location.origin+'/wines/fetch-variety',
			}).
			success(function(data){
                 $scope.varieties = data;
            });
            $scope.checked_varieties = [];
            $scope.checked_countries = [];
		}
	]);