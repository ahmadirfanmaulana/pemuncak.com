admin.controller('Destination', function($scope, $destination, $helper, $action, $http, $location) {
  // helper primary
  $helper.select2();

  $scope.data = {};
  $scope.action = {};

  // define data input
  !$scope.data.name, !$scope.data.poster, !$scope.data.lat, !$scope.data.lng, !$scope.data.map, !$scope.data.province_id, !$scope.data.regional_id, !$scope.data.full_address, !$scope.data.preview;

  // define data primary
  $scope.data.fromDB = {};
  $scope.data.change = {};
  // data join
  $scope.data.join = {};

  //
  $scope.data.orderBy = '-id';
  $scope.data.limitData = [5, 10, 20, 30];
  $scope.data.offset = 0;
  $scope.data.limit = $scope.data.limitData[0];

  // action
  $scope.action.method = '';

  //
  $scope.action.orderBy = function(field){
    if ($scope.data.orderBy == field) {
      $scope.data.orderBy = '-' + field;
    }
    else {
      $scope.data.orderBy = field;
    }
  };

  //
  $scope.action.clearInput = function() {
    $scope.data.name = '';
    $scope.data.poster = '';
    $scope.data.lat = '';
    $scope.data.lng = '';
    $scope.data.map = '';
    $scope.data.province_id = '';
    $scope.data.regional_id = '';
    $scope.data.full_address = '';
    $scope.data.preview = '';
    $scope.data.about = '';
  };

  // get info from DB
  $scope.action.load = function() {

    $destination.get().then(function(response) {
      $scope.data.fromDB = response.data;
    });

    // count data
    $scope.action.countData();

    // paging
    $scope.action.paging();
  };

  // count data
  $scope.action.countData = function(){
    $destination.count().then(function(response){
      $scope.data.count = response.data;
    });
  };

  // paging
  $scope.data.paging = [];
  $scope.action.paging = function(){
    $destination.count().then(function(response){

      var maxi = Math.ceil(response.data / $scope.data.limit);
      for (var i = 0; i < maxi; i++) {
        $scope.data.paging[i] = i + 1;
      }

    });
  };

  $scope.action.paging();

  // load data first
  $scope.action.load();

  // validation
  $scope.action.validate = function() {

  };

  /*

  -------------
  save
  -------------

  */

  // define save
  $scope.action.save = {};

  // start
  $scope.action.save.start = function() {
    // init
    $scope.action.method = 'create';
    $scope.action.clearInput();

    // get provinces join
    $action.get('provinces').then(function(response) {
      $scope.data.join.provinces = response.data;
    });

    $scope.data.join.getRegionalWhere = function(province_id) {
      $action.getWhere('regionals', {
        data: {
          province_id: province_id
        },
        method: 'get'
      }).then(function(response) {
        $scope.data.join.regionals = response.data;
      });
    };

    // show modal
    $helper.modal('form', 'show');
  };

  // run
  $scope.action.save.run = function(method = false) {

    // upload file
    $scope.data.poster = $helper.uploadFile('poster', 'img/destinations/poster/').name;
    $scope.data.preview = $helper.uploadFile('preview', 'img/destinations/preview/').name;

    // insert to DB
    $action.create('destinations', {
      name: $scope.data.name,
      poster: $scope.data.poster,
      province_id: $scope.data.province_id,
      regional_id: $scope.data.regional_id,
      full_address: $scope.data.full_address,
      preview: $scope.data.preview,
      about: $scope.data.about,
      lat: 0,
      lng: 0,
      map: 0
    }).then(function(response) {

      if (method == 'andClose') {
        $helper.modal('form', 'close');
      }

      $helper.modal('success', 'show', {
        title: 'Success',
        text: response.data.message
      });

      $scope.action.load();

    });

  };


  $scope.action.edit = {};

  $scope.action.edit.start = function(row) {
    // init
    $scope.data.change = row;
    $scope.action.method = 'edit';
    // get provinces join
    $action.get('provinces').then(function(response) {
      $scope.data.join.provinces = response.data;
    });

    $scope.data.join.getRegionalWhere = function(province_id) {
      $action.getWhere('regionals', {
        data: {
          province_id: province_id
        },
        method: 'get'
      }).then(function(response) {
        $scope.data.join.regionals = response.data;
      });
    };

    $location.path('/edit');

    $helper.scrollTop();
  };


  // trash
  $scope.action.trash = {};

  $scope.action.trash.start = function(row) {
    $scope.data.change = row;
    $action.getWhere('destinations', {
      data: {
        'destinations.id': $scope.data.change.id
      },
      method: 'first'
    }).then(function(response) {
      $helper.modal('delete', 'show', {
        text: 'Do you want delete "' + response.data.name + '" destination ?'
      });
    });
  };

  $scope.action.trash.run = function() {
    // delete file
    $helper.deleteFile('img/destinations/preview/', $scope.data.change.preview);
    $helper.deleteFile('img/destinations/poster/', $scope.data.change.poster);
    // delete data from DB
    $action.delete('destinations', {
        id: $scope.data.change.id
      })
      .then(function(response) {
        $helper.modal('success', 'show', {
          title: 'Success',
          text: response.data.message
        });
        $helper.modal('delete', 'close');
        //
        $scope.action.load();
        //
        $scope.action.paging();
      });

  };

});
