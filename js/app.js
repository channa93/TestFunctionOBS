var app = angular.module('myApp', ['ngRoute']);
app.config(['$routeProvider', function($routeProvider) {
   $routeProvider.
   
      // route for the about page
    when('/', {
        templateUrl : 'index.php',
        controller  : 'clientController'
    }).
    when('/adminPage', {
      	templateUrl: 'admin.php', 
      	controller: 'clientController'
    })
 
   // .otherwise({
   //    redirectTo: '/'
   // });

   
	
}]);

