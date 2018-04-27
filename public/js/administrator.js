/*

  --------------------------------------
  Start jQuery
  --------------------------------------

*/

$(document).ready(function(){
  $('.nav-link').click(function () {
    $('.nav-item').removeClass('active');
    $(this).parent('.nav-item').addClass('active');
  })
})


/*

  --------------------------------------
  Start Angular
  --------------------------------------

*/

var admin = angular.module('admin', ['ngRoute']);

/*

  --------------------------------------
  Factory
  --------------------------------------

*/

admin.factory('$custom', function(){
  var Custom = {};

  Custom.menu = function(active){
    $('.nav-item').removeClass('active');
    $('#nav-' + active).addClass('active');
  };

  Custom.dataTabless = function(){
    $('.datatable').DataTable({
      responsive: true,
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ items/page',
      }
    });

    // Select2
    $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
  };

  Custom.map = function(){

  }

  Custom.select2 = function(){
    $('.select2-show-search').select2({
      minimumResultsForSearch: ''
    });
  }


  return Custom;
});

admin.factory('$query', function($http){
  Query = {};

  Query.get = function(url, data={}){
    return $http.get('api/' + url, data);
  };

  Query.post = function(url, data={}){
    return $http.post(url, data);
  };

  return Query;
});

admin.factory('$province', function($http){
  Province = {};

  Province.get = function(){
    return $http.get('api/provinces');
  };

  Province.getWhere = function(data){
    return $http.get('api/provinces/first', data);
  };

  return Province;
});

admin.factory('$regional', function($http){
  Regional = {};

  Regional.get = function(){
    return $http.get('api/regionals');
  };

  Regional.getWhere = function(data){
    // return $http({
    //     url: 'api/regionals/first',
    //     method: "GET",
    //     params: data
    //  });

    return $http.post('api/regionals/first', data);
  };

  return Regional;
});

admin.factory('$packetItems', function($http){
  PacketItem = {};

  PacketItem.get = function(){
    return $http.get('api/packet-items');
  };

  PacketItem.getWhere = function(data){
    return $http.post('api/packet-items/first', data);
  };

  PacketItem.create = function(data){
    return $http.post('api/packet-items/create', data);
  };


  return PacketItem;
})

/*

  --------------------------------------
  End Factory
  --------------------------------------

*/

/*

  --------------------------------------
  Routing
  --------------------------------------

*/

//
admin.config(function($routeProvider){
  $routeProvider.when('/',{
    controller : 'dashboard',
    templateUrl : 'administrator/dashboard'
  });

  $routeProvider.when('/destinations',{
    controller : 'destinations',
    templateUrl : 'administrator/destinations'
  });

  $routeProvider.when('/destinations/new',{
    controller : 'destinations',
    templateUrl : 'administrator/destinations/new'
  });

  $routeProvider.when('/packet-items',{
    controller : 'packetItems',
    templateUrl : 'administrator/packet-items'
  });

  $routeProvider.when('/packet-items/new',{
    controller : 'packetItems',
    templateUrl : 'administrator/packet-items/new'
  });

  $routeProvider.when('/packet-items/edit',{
    controller : 'packetItemsEdit',
    templateUrl : 'administrator/packet-items/edit'
  });

  $routeProvider.when('/packet-items/delete',{
    controller : 'packetItems',
    templateUrl : 'administrator/packet-items/delete'
  });

  $routeProvider.when('/posts',{
    controller : 'posts',
    templateUrl : 'administrator/posts'
  });

  $routeProvider.when('/steps',{
    controller : 'steps',
    templateUrl : 'administrator/steps'
  });

  $routeProvider.when('/users',{
    controller : 'users',
    templateUrl : 'administrator/users'
  });
})

/*

  --------------------------------------
  End Routing
  --------------------------------------

*/

/*

  --------------------------------------
  Directives
  --------------------------------------

*/

admin.directive('a', function() {
    return {
        restrict: 'E',
        link: function(scope, elem, attrs) {
            if(attrs.ngClick || attrs.href === '' || attrs.href === '#' || attrs.type === 'silent'){
                elem.on('click', function(e){
                    e.preventDefault();
                });
            }
        },
        controller: function($scope, $location){
          $scope.goTo = function(path){
            $location.path(path);
          }
        }
   };
});

admin.directive('link', function() {
    return {
        restrict: 'A',
        link: function(scope, elem, attrs) {
            if(attrs.ngClick || attrs.href === '' || attrs.href === '#' || attrs.type === 'silent'){
                elem.on('click', function(e){
                    e.preventDefault();
                });
            }
        },
        controller: function($scope, $location){
          $scope.goTo = function(path){
            $location.path(path);
          }
        }
   };
});

/*

  --------------------------------------
  End Directives
  --------------------------------------

*/


/*

  --------------------------------------
  Controller
  --------------------------------------

*/


// header controller
admin.controller('header', function($scope, $location){
  $scope.goTo = function(path){
    $location.path(path);
  }
});

// navbar controller
admin.controller('navbar', function($scope, $location){
  $scope.goTo = function(path){
    $location.path(path);
  }
});

// dashboard controller
admin.controller('dashboard', function($scope, $custom){
  // menu active
  $custom.menu('dashboard');
  $custom.dataTabless();


});

// destinations controller
admin.controller('destinations', function($scope, $custom, $query, $province, $regional){
  // menu active
  $custom.menu('destinations');

  // helper
  $custom.dataTabless();
  $custom.select2();

  // define scope
  $scope.provinces = {};
  $scope.regionals = {};

  // get from api
  $province.get().then(function(response) {
    $scope.provinces.data = response.data;
  });
  $regional.get().then(function(response) {
    $scope.regionals.data = response.data;
  });

  $scope.provinces.changed = function(){
    $regional.getWhere({ province_id : $scope.provinces.input }).then(function(response) {
      $scope.regionals.data = response.data;
      console.log(response);
    });
  }

});

// packetItems controller
admin.controller('packetItems', function($scope, $location, $custom, $packetItems){
  // menu active
  $custom.menu('packetItems');

  // helper
  $custom.dataTabless();
  $custom.select2();

  // define
  $scope.aa = "aa";
  $scope.packetItems = {};
  $scope.packetItems.baseUrl = 'packet-items';
  $scope.packetItems.pathNow = $scope.packetItems.baseUrl + '/home';

  // action
  $scope.go = function(path){
    $scope.packetItems.pathNow = $scope.packetItems.baseUrl + '/' + path;

    $location.path($scope.packetItems.pathNow);

    alert($scope.packetItems.pathNow);

    if ($scope.packetItems.pathNow == $scope.packetItems.baseUrl + '/home' || $scope.packetItems.pathNow == $scope.packetItems.baseUrl + '') {
      alert($scope.packetItems.pathNow);
    }
    else if ($scope.packetItems.pathNow == $scope.packetItems.baseUrl + '/new') {
      alert('heoheo');
    }
  };


  // $packetItems.get().then(function(response){
  //   $scope.packetItems.data = response.data;
  // });
  //
  // $scope.packetItems.create = function(){
  //   $scope.packetItems.dataInsert = {
  //     name : $scope.packetItems.name,
  //     icon : 'default.png'
  //   };
  //
  //   $packetItems.create($scope.packetItems.dataInsert).then(function(response){
  //     alert(response.data.message);
  //
  //     $location.path('packet-items');
  //   });
  // };

});

// admin.controller('packetItemsEdit', function($scope, $custom, $packetItems){
//   // menu active
//   $custom.menu('packetItems');
//
//   $scope.packetItems = {};
//   $packetItems.getWhere({ id : 3 }).then(function(response){
//   //   // $scope.packetItems.edit.data = response.data;
//   //
//     console.log(response.data.name);
//   });
//
//
// });

// steps controller
admin.controller('steps', function($scope, $custom){
  // menu active
  $custom.menu('steps');


});

// users controller
admin.controller('users', function($scope, $custom){
  // menu active
  $custom.menu('users');


});
