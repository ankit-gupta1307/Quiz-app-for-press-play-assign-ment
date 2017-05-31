app.controller('loginController', ['$scope', '$window', '$location', '$routeParams', 'questionaire',
    function($scope, $window, $location, $routeParams, questionaire) { 
      $scope.showHints = true;
      $scope.user = {
          name: ""
      };
       
      $scope.$watch('user.name', function() {
          if($scope.user.name.length > 0) {
              $scope.showHints = true;
          }
      });
        
      $scope.submit = function() {
          if($scope.user.name.length > 0) { 
              questionaire.username = $scope.user.name;
              $location.replace();
              $location.path('/question/0');
          } else {
              $scope.showHints = false;
          }
      }  
}]);