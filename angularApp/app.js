(function(){

	var app = angular.module('app', ['ngRoute']);

	app.config(function($routeProvider) {
		$routeProvider
		.when('/', {
			templateUrl: 'angularApp/views/intel8080.html',
			controller: '8080Controller',
			controllerAs: '8080Ctrl'
		})
		.otherwise({ redirectTo: '/' });
	});

})();
