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

var climbing = angular.module('climbing', ['ngRoute']);


/*

  --------------------------------------
  Routing
  --------------------------------------

*/

//
climbing.config(function($routeProvider){
  $routeProvider.when('/',{
    controller : 'dashboard',
    templateUrl : 'dashboard/index'
  });

  $routeProvider.when('/adventure',{
    controller : 'adventure',
    templateUrl : 'dashboard/adventure'
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

climbing.directive('a', function() {
    return {
        restrict: 'E',
        link: function(scope, elem, attrs) {
            if(attrs.ngClick || attrs.href === '' || attrs.href === '#' || attrs.type === 'silent'){
                elem.on('click', function(e){
                    e.preventDefault();
                });
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
  Factory
  --------------------------------------

*/

climbing.factory('$custom', function(){
  var Custom = {};

  Custom.menu = function(active){
    $('.nav-item').removeClass('active');
    $('#nav-' + active).addClass('active'); 
  }

  return Custom;
});

/*

  --------------------------------------
  End Factory
  --------------------------------------

*/




/*

  --------------------------------------
  Controller
  --------------------------------------

*/


// header controller
climbing.controller('header', function($scope, $location){
  $scope.goTo = function(path){
    $location.path(path);
  }
});

// navbar controller
climbing.controller('navbar', function($scope, $location){
  $scope.goTo = function(path){
    $location.path(path);
  }
});

// dashboard controller
climbing.controller('dashboard', function($scope, $custom){
  // menu active
  $custom.menu('dashboard');


});

// adventure
climbing.controller('adventure', function($scope, $custom){
  // menu active
  $custom.menu('adventure');


});


/*

  --------------------------------------
  End Controller
  --------------------------------------

*/
