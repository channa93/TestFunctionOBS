var app = angular.module('myApp', ['ngRoute','angular-loading-bar']);
app.config(['$routeProvider','$locationProvider', function($routeProvider,$locationProvider) {
   // $locationProvider.html5Mode(true);
   $locationProvider.html5Mode({
     enabled: true,
     requireBase: false
   });
   $routeProvider.
   
   // route for the about page
    when('/', {
        templateUrl : 'views/home.php'
        //, controller  : 'clientController'
    }).
   when('/adminPage', {
        templateUrl: 'views/admin.php'
        //, controller: 'adminController'
   }).
 
   otherwise({
      redirectTo: '/'
   });

}]);


// // overide base url to place where this project is placed in
// $(document).ready(function(){
//     $("#base-url").attr("href", CLIENT_URL);
// });



