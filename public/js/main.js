var doc = angular.module('doc', []);

doc.factory('Model', function($http){
  // define variable model
  var Model = {};

  // config url
  Model.base_url = 'localhost:8000/';
  Model.api_url = Model.base_url + "api/";

  // define model
  Model.get = function(url, table, getMethod){
    return $http.get(Model.base_url + url, { method : getMethod });
  };

  // return
  return Model;
});

doc.controller('login' , function($scope, Model){

  // run login
  $scope.runLogin = function(){
    // Model.post('login', 'row');
  }

});
