var app = angular.module('ibiblioteca', ['ngRoute']);

app.config(['$routeProvider', function($routeProvider) {
	$routeProvider.when('/editora',{
		templateUrl: 'views/editora.html',
		controller: 'editoraCtrl as editCtrl'
	});
}])