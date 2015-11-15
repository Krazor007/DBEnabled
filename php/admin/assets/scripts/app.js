var app = angular.module('adminapp', ['ngRoute','ngSanitize']);

var path = 'assets/templates/';

app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        templateUrl: path + 'adminhome.html',
        controller: 'HomeCtrl'
      }).
       when('/products', {
        templateUrl: path + 'adminproducts.html',
        controller: 'ProdCtrl'
      }).
      otherwise({
        redirectTo: '/'
      });
}]);