var app = angular.module('myApp', ['ngRoute']);
app.config(['$routeProvider','$locationProvider', function($routeProvider,$locationProvider) {
   $locationProvider.html5Mode(true);
   $routeProvider.
   
   // route for the about page
    when('/', {
        templateUrl : 'views/home.php',
        controller  : 'clientController'
    }).
   when('/adminPage', {
        templateUrl: 'views/admin.php', 
        controller: 'adminController'
   }).
 
   otherwise({
      redirectTo: '/'
   });

   
  
}]);

