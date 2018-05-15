climber.controller('Packet', function($scope, $http, $location, $helper, $action, $packet, $user){

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
  $scope.action.load = function(method){
    switch (method) {
      case 'myPackets':
        $packet.myPackets().then(function(response){
          $scope.data.fromDB = response.data;
        });
      break;
      default:
      alert('params not found');
    }
  };

  $scope.data.me = {username : 'ahmad irfan'}; 

  $scope.me();

  // load
  $scope.action.load('myPackets');

  // count
  $packet.myPacketsCount().then(function(response){
    $scope.data.count = response.data;
  });

});
