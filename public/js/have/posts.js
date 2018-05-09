admin.controller('Post', function($scope, $http, $location, $helper, $action, $post, $user){

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
    $post.get().then(function(response){

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

  };

  // restore
  $scope.action.create.restore = function(method){

    // upload poster
    $scope.data.field.poster = $helper.uploadFile('poster', 'img/posts/').name;
    $scope.data.field.user_id = 3;

    // user make
    $user.me()
    .then(function(response, scope = $scope.data.field){
      scope.user_id = 1;
    });

    // restoring
    $post.create($scope.data.field)
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

    }, function(response){

      // show modal
      $helper.modal('error', 'show', {
        title : 'Error',
        text : response.data
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
      text : 'do you want delete this posts ?'
    });

  };

  // delete
  $scope.action.trash.destroy = function(){

    // deleting
    $post.delete({ id : $scope.data.change.id })
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

    // get this data edit
    $post.getWithData({ id : row.id }).then(function(response){
      $scope.data.change = response.data;
      $scope.data.field = $scope.data.change;
    });


    // show modal edit
    $helper.modal('form-edit', 'show');

  };

  // update
  $scope.action.edit.update = function(){

    // upload poster
    $scope.data.field.poster = $helper.changeFile('poster-change', 'img/posts/', $scope.data.field.poster).name;
    console.log($scope.data.field.poster);

    // updating
    $post.update($scope.data.field)
    .then(function(response){
      $helper.modal('success', 'show', { text : response.data.message });
      $helper.modal('form-edit', 'close');
      $scope.action.load();
    }, function(response){
      $helper.modal('error', 'show', { text : response.data });
    });

  }; // close update


});
