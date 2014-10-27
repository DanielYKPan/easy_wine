//app.js
	//create angular app
	var easyWineApp = angular.module(
		'easyWineApp', 
		['easyWineControllers', 'easyWineDirectives'], 
		function($interpolateProvider) {
			$interpolateProvider.startSymbol('<%');
	        $interpolateProvider.endSymbol('%>');
		}
	);
