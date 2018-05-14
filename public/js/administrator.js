/*

  --------------------------------------
  Start jQuery
  --------------------------------------

*/

$(document).ready(function(){
  //
})

/*

  --------------------------------------
  End jQuery
  --------------------------------------

*/

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

admin.factory('$config', function(){
  var Config = {};

  Config.baseUrl = 'http://127.0.0.1:8000/';

  return Config;
});

admin.factory('$helper', function($http, $config){
  var Helper = {};

  Helper.menu = function(active){
    $('.nav-item').removeClass('active');
    $('#nav-' + active).addClass('active');
  };

  Helper.dataTable = function(){
    $('.dataTable').DataTable({
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

  Helper.modal = function(selector, show, data={}){
    if (show=='close') {
      $('#' + selector + '-modal').find('button.close').click();
    }
    else {
      $('#' + selector + '-modal').modal('show');
    }


    if (data) {
      if (data.title) {
        $('#' + selector + '-modal').find('#' + selector + '-modal-title').text(data.title);
      }
      if (data.text) {
        $('#' + selector + '-modal').find('#' + selector + '-modal-text').text(data.text);
      }
      if (data.icon) {
        $('#' + selector + '-modal').find('#' + selector + '-modal-icon').addClass(data.icon);
      }
    }
  };

  Helper.select2 = function(){
    $('.select2-show-search').select2({
      minimumResultsForSearch: ''
    });
  };

  Helper.inputError = function(selector, text){
    $('#'+selector+'-error').html(text).css({
      color : 'red'
    });
  };

  Helper.editing = function(unique, method=false){
    $('.editing-true').parent('td').hover();
    if (method) {
      $('.editing-true').addClass('hidden');
      $('.editing-false').removeClass('hidden');
      $('.editing-true-' + unique).removeClass('hidden');
      $('.editing-false-' + unique).addClass('hidden');
    }
    else {
      $('.editing-false-' + unique).removeClass('hidden');
      $('.editing-true-' + unique).addClass('hidden');
    }
  };

  Helper.uploadFile = function(elId, path){
    file = document.getElementById(elId).files[0];
    var formData = new FormData();

    formData.append('file', file);
    formData.append('path', path);

     $http({
      url : $config.baseUrl + 'api/helper/upload',
      method : 'POST',
      data : formData,
      headers : {'Content-Type' : undefined}
    });

    return file;
  };

  Helper.changeFile = function(elId, path, then){
    file = document.getElementById(elId).files[0];
    var formData = new FormData();

    formData.append('file', file);
    formData.append('path', path);
    formData.append('then', then);

    $http({
      url : $config.baseUrl + 'api/helper/uploadAndChange',
      method : 'POST',
      data : formData,
      headers : {'Content-Type' : undefined}
    });

    return file;
  };

  Helper.deleteFile = function(path, then){
    var formData = new FormData();

    formData.append('path', path);
    formData.append('then', then);

    $http({
      url : $config.baseUrl + 'api/helper/deleteFile',
      method : 'POST',
      data : formData,
      headers : {'Content-Type' : undefined}
    });

    return true;
  };

  Helper.checkFile = function(elId){
    file = (document.getElementById(elId).files[0]) ? true : false ;
    // var formData = new FormData();
    //
    // formData.append('file', 'huhu');

    return file;
  };

  Helper.scrollTop = function(){

    $(window).scrollTop(0);
    // alert('yes');

  };


  return Helper;
});

admin.factory('$action', function($http, $config){
  Query = {};

  Query.customUrl = function(data={}){
    if (!data.data) {
      data.data = {};
    }
    // return
    if (data.method == "post") {
      return $http.post($config.baseUrl + 'api/' + url, data.data);
    }
    else {
      return $http.get($config.baseUrl + 'api/' + url);
    }
  };

  Query.get = function(url){
    return $http.get($config.baseUrl + 'api/' + url);
  };

  Query.getWhere = function(url, data={}){
    if (!data.method) {
      data.method = 'get';
    }
    return $http.post($config.baseUrl + 'api/' + url + '/where', data);
  };

  Query.create = function(url, data={}){
    return $http.post($config.baseUrl + 'api/' + url + '/create', data);
  };

  Query.update = function(url, data={}){
    return $http.post($config.baseUrl + 'api/' + url + '/update', data);
  };

  Query.delete = function(url, data={}){
    return $http.post($config.baseUrl + 'api/' + url + '/delete', data);
  };

  return Query;
});

admin.factory('$destination', function($config, $http){

  //
  var Destination = {};

  //
  Destination.url = $config.baseUrl + 'api/' + 'destinations/';

  //
  Destination.get = function(){
    return $http.post(Destination.url, []);
  };

  Destination.all = Destination.get;

  Destination.count = function(){
    return $http.get(Destination.url + 'count');
  };

  //
  return Destination;

});

admin.factory('$step', function($config, $http){

  //
  var Step = {};

  //
  Step.url = $config.baseUrl + 'api/' + 'steps/';

  //
  Step.get = function(){
    return $http.get(Step.url);
  };
  Step.getWithData = function(data){
    return $http.post(Step.url + 'find', data);
  };
  Step.create = function(data){
    return $http.post(Step.url + 'create', data);
  };
  Step.delete = function(data){
    return $http.post(Step.url + 'delete', data);
  };
  Step.update = function(data){
    return $http.post(Step.url + 'update', data);
  };
  Step.count = function(){
    return $http.get(Step.url + 'count');
  };

  //
  return Step;

});

admin.factory('$climber', function($config, $http){

  //
  var Climber = {};

  //
  Climber.url = $config.baseUrl + 'api/' + 'climbers/';

  //
  Climber.get = function(){
    return $http.get(Climber.url + 'get');
  };
  Climber.getWithData = function(data){
    return $http.post(Climber.url + 'find', data);
  };
  Climber.delete = function(data){
    return $http.post(Climber.url + 'delete', data);
  };
  Climber.count = function(){
    return $http.get(Climber.url + 'count');
  };

  //
  return Climber;

});

admin.factory('$post', function($config, $http){

  //
  var Post = {};

  //
  Post.url = $config.baseUrl + 'api/' + 'posts/';

  //
  Post.get = function(){
    return $http.get(Post.url + 'get');
  };
  Post.getWithData = function(data){
    return $http.post(Post.url + 'find', data);
  };
  Post.create = function(data){
    return $http.post(Post.url + 'create', data);
  };
  Post.delete = function(data){
    return $http.post(Post.url + 'delete', data);
  };
  Post.update = function(data){
    return $http.post(Post.url + 'update', data);
  };
  Post.count = function(){
    return $http.get(Post.url + 'count');
  };

  //
  return Post;

});

admin.factory('$user', function($config, $http){

  //
  var User = {};

  //
  User.url = $config.baseUrl + 'users';

  //
  User.get = function(){
    return $http.get(User.url + 'get');
  };
  User.getWithData = function(data){
    return $http.post(User.url + 'find', data);
  };
  User.create = function(data){
    return $http.post(User.url + 'create', data);
  };
  User.delete = function(data){
    return $http.post(User.url + 'delete', data);
  };
  User.update = function(data){
    return $http.post(User.url + 'update', data);
  };
  User.me = function(){
    return $http.get($config.baseUrl + 'me');
  };

  //
  return User;

});

admin.factory('$packetItem', function($config, $http){

  //
  var PacketItem = {};

  //
  PacketItem.url = $config.baseUrl + 'api/' + 'packet-items/';

  //
  PacketItem.get = function(){
    return $http.get(PacketItem.url);
  };
  PacketItem.getWithData = function(data){
    return $http.post(PacketItem.url + 'find', data);
  };
  PacketItem.create = function(data){
    return $http.post(PacketItem.url + 'create', data);
  };
  PacketItem.delete = function(data){
    return $http.post(PacketItem.url + 'delete', data);
  };
  PacketItem.update = function(data){
    return $http.post(PacketItem.url + 'update', data);
  };

  PacketItem.count = function(){
    return $http.get(PacketItem.url + 'count');
  };

  //
  return PacketItem;

});

/*

  --------------------------------------
  End Factory
  --------------------------------------

*/

/*

  --------------------------------------
  Directives
  --------------------------------------

*/

//
admin.directive('ngLinkto', function() {
    return {
        restrict: 'A',
        link: function(scope, elem, attrs) {
            if(attrs.ngClick || attrs.href === '' || attrs.href === '#' || attrs.type === 'silent'){
                elem.on('click', function(e){
                    e.preventDefault();
                });
            }
        },
        controller: function($scope, $location, $helper){
          $scope.goTo = function(path){
            $location.path(path);
          };
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

admin.controller('header', function($scope){

});

admin.controller('navbar', function($scope){

});

/*

  --------------------------------------
  End Controller
  --------------------------------------

*/
