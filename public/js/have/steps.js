admin.controller('Step', function($scope, $http, $location, $helper, $action, $step, $destination){

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
  $scope.action.method;

  // clear field
  $scope.clearField = function(){
    $scope.data.field = {};
  };

  // get info from DB
  $scope.action.load = function(){
    $action.get('steps/get').then(function(response){

      $scope.data.fromDB = response.data;

    });
  };

  // load
  $scope.action.load();

  // start create
  $scope.action.create.start = function(){

    // set action method
    $scope.action.method = 'create';

    // show modal
    $helper.modal('form', 'show');

    // select destination
    $destination.get().then(function(response){
      // set
      $scope.data.belongsTo.destinations = response.data;
    });

  };

  // restore
  $scope.action.create.restore = function(method){

    // restoring
    $step.create($scope.data.field)
    .then(function(response){

      // show modal
      $helper.modal('success', 'show', {
        title : 'Success',
        text : response.data.message
      });

      // close form modal if select method
      if (method == 'andClose') {
        $helper.modal('form', 'close');
      }

      // refresh data
      $scope.action.load();

      // clear field
      $scope.clearField();

    }, function(){

      // show modal
      $helper.modal('error', 'show', {
        title : 'Error',
        text : 'Error'
      });

    });

  }; // restore close

  // start trash
  $scope.action.trash.start = function(row){

    // init
    $scope.action.method = 'delete';
    $scope.data.change = row;

    // show modal question
    $helper.modal('delete', 'show', {
      text : 'do you want delete this step ?'
    });

  };

  // delete
  $scope.action.trash.destroy = function(){

    // deleting
    $step.delete({ id : $scope.data.change.id })
    .then(function(response){
      $helper.modal('success', 'show', { text : response.data.message });
      $scope.action.load();
    }, function(response){
      $helper.modal('error', 'show', { text : response.data })
    });

    // close modal
    $helper.modal('delete', 'close');

  }; // close delete


  // edit
  $scope.action.edit.start = function(row){

    // init
    $scope.action.method = 'edit';

    $step.getWithData({ id : row.id }).then(function(response){
      $scope.data.change = response.data;
      $scope.data.field = $scope.data.change;
    });

    // show modal edit
    $helper.modal('form-edit', 'show');

    // select destination
    $destination.get().then(function(response){
      // set
      $scope.data.belongsTo.destinations = response.data;
    });
  };

  // update
  $scope.action.edit.update = function(){

    $step.update($scope.data.field)
    .then(function(response){
      $helper.modal('success', 'show', { text : response.data.message });
      $helper.modal('form-edit', 'close');
      $scope.action.load();
    }, function(response){
      $helper.modal('error', 'show', { text : response.data });
    });

  };

});
