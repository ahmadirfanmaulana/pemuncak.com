admin.controller('PacketItem', function($scope, $helper, $action, $http , $packetItem){
  // $helper.dataTable();
  $scope.data = {};
  $scope.action = {};

  // define data
  !$scope.data.name, !$scope.data.about_item, !$scope.data.icon;
  $scope.data.fromDB = {};
  $scope.data.change = {};
  $scope.action.type;

  $scope.data.orderBy = 'id';
  $scope.data.limit = 5;
  $scope.data.limitSelect = [5, 10, 20, 30];

  // action
  $scope.action.clearInput = function(){
    $scope.data.name = '';
    $scope.data.about_item = '';
  };

  // get info from DB
  $scope.action.load = function(){
    $packetItem.get().then(function(response){
      $scope.data.fromDB = response.data;
    });

    $packetItem.count().then(function(response){
      $scope.data.count = response.data;
    })
  };
  $scope.action.load();

  // save
  $scope.action.save = {};
  $scope.action.save.start = function(){
    // init
    $scope.action.type = 'create';
    $scope.action.clearInput();
    $helper.editing($scope.data.change.id, false);

    // show modal
    $helper.modal('form', 'show');
  };

  $scope.action.save.run = function(method){
    // validation
    if (!$scope.data.name) {
      $helper.inputError('packet-item-name', 'This input required');
    }
    else {
      $helper.inputError('packet-item-name', '');

      ( $helper.checkFile('icon') )
      ? $scope.data.icon = $helper.uploadFile('icon', 'img/packet-items/').name
      : $scope.data.icon = 'default.png';

      $packetItem.create({
        name : $scope.data.name,
        about_item : $scope.data.about_item,
        icon : $scope.data.icon
      }).then(function(response){

        // alert success
        $helper.modal('success', 'show', {
          title : 'Successfully',
          text : response.data.message
        });

        if (!method) {
          $scope.action.clearInput();
        }
        else if (method == 'andClose') {
          $scope.action.clearInput();
          $helper.modal('form', 'close');
        }

        $scope.action.load();

      });

    }


  };

  // trash
  $scope.action.trash = {};
  $scope.action.trash.start = function(row){
    // init
    $helper.editing($scope.data.change.id, false);
    $scope.data.change = row;
    $packetItem.getWhere({
      data : { id : $scope.data.change.id },
      method : 'first'
    }).then(function(response){
      $helper.modal('delete', 'show', {
        text : 'Do you want delete "' + response.data.name + '" packet item ?'
      });
    });
  };

  $scope.action.trash.run = function(){
    // delete file
    $helper.deleteFile('img/packet-items/', $scope.data.change.icon);
    // delete data from DB
    $packetItem.delete({
      id : $scope.data.change.id
    })
    .then(function(response){
      $helper.modal('success', 'show', {
        title : 'Success',
        text : response.data.message
      });

      $helper.modal('delete', 'close');

      $scope.action.load();
    });

  };

  // edit
  $scope.action.edit = {};

  $scope.action.edit.start = function(row){
    // initialize action
    $scope.action.type = 'edit';
    $scope.data.change = row;

    $scope.data.name = row.name;
    $scope.data.about_item = row.about_item;

    $helper.editing($scope.data.change.id, true);
  };

  $scope.action.edit.close = function(){
    $helper.editing($scope.data.change.id, false);
  }

  $scope.action.edit.run = function(method){
    // validation
    if (!$scope.data.name) {
      $helper.inputError('packet-item-name', 'This input required');
    }
    else {
      $helper.inputError('packet-item-name', '');
      // updating

      if ($helper.checkFile('icon-edit')) {
        $scope.data.icon = $helper.changeFile('icon-edit', 'img/packet-items/', $scope.data.change.icon).name;
      }
      else {
        $scope.data.icon = $scope.data.change.icon;
      }

      $packetItem.update({
        id : $scope.data.change.id,
        name : $scope.data.name,
        about_item : $scope.data.about_item,
        icon : $scope.data.icon
      }).then(function(response){

        // alert success
        $helper.modal('success', 'show', {
          title : 'Successfully',
          text : response.data.message
        });

        // clear
        $scope.action.clearInput();
        $helper.modal('form', 'close');

        // refresh data
        $scope.action.load();

      });

    }
  };

});
