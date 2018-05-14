admin.controller('Climber', function($scope, $http, $location, $helper, $action, $climber, $user){

  $scope.data = {};
  $scope.action = {};

  // define data
  $scope.data.fromDB = {};
  $scope.data.belongsTo = {};
  $scope.data.change = {};
  $scope.data.field = {};
  $scope.action.create = {};
  $scope.action.edit = {};
  $scope.action.trash = {};
  $scope.action.method = '';
  $scope.data.limitSelect = [5, 10, 20, 30];
  $scope.data.limit = $scope.data.limitSelect[0];
  $scope.data.orderBy = '-id';

  // clear field
  $scope.clearField = function(){
    $scope.data.field = {};
  };

  // get info from DB
  $scope.action.load = function(){
    $climber.get().then(function(response){
      $scope.data.fromDB = response.data;
    });
  };

  // load
  $scope.action.load();

  // count
  $climber.count().then(function(response){
    $scope.data.count = response.data;
  });

});
