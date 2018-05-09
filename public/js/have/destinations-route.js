  admin.config(function($routeProvider){
    $routeProvider.when('/', {
      templateUrl : 'destinations/home'
    });
    $routeProvider.when('/edit', {
      templateUrl : 'destinations/edit'
    });
  })
