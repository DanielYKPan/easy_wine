//app.js
	//create angular app
	/*var easyWineApp = angular.module(
		'easyWineApp', 
		[], 
		function($interpolateProvider) {
			$interpolateProvider.startSymbol('[[');
	        $interpolateProvider.endSymbol(']]');
		}
	);*/
var easyWineApp = angular.module(
		'easyWineApp', 
		['easyWineControllers', 'easyWineDirectives']
	);

easyWineApp.config(function($interpolateProvider) {
  $interpolateProvider.startSymbol('[[');
  $interpolateProvider.endSymbol(']]');
});