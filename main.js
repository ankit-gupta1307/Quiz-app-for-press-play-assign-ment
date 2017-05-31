var app = angular.module('questionaireApp', ['ngRoute','ngMaterial', 'ng-fusioncharts']);

app.config(function($routeProvider){
  $routeProvider
  .when('/',{
    redirectTo: '/login'
  })
  .when('/login',{
    controller: 'loginController',
    templateUrl: 'views/login.html'
  })
  .when('/question/:id',{
    controller: 'questionController',
    templateUrl: 'views/main.html',
    resolve: {
        app: function ($q, questionaire, $location) {
          var defer = $q.defer();
          if(questionaire.username.length > 0) {
              defer.resolve(); 
          } else {
              $location.path('/');
          }
          return defer.promise;
        }
    }
  })
  .when('/result/',{
    controller: 'resultController',
    templateUrl: 'views/result.html',
    resolve: {
        app: function ($q, questionaire, $location) {
          var defer = $q.defer();
          if(questionaire.username.length > 0) {
              defer.resolve(); 
          } else {
              $location.path('/');
          }
          return defer.promise;
        }
    }
  })
  .otherwise({
    redirectTo: '/'
  });
});


 

    

