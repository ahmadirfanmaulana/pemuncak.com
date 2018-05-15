/*

  --------------------------------------
  Start Angular
  --------------------------------------

*/

var climber = angular.module('climber', ['ngRoute']);


/*

  --------------------------------------
  Factory
  --------------------------------------

*/

climber.factory('$config', function(){
  var Config = {};

  Config.baseUrl = 'http://127.0.0.1:8000/';

  return Config;
});

climber.factory('$helper', function($http, $config){
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

climber.factory('$action', function($http, $config){
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

climber.factory('$user', function($config, $http){

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
    return $http.get($config.baseUrl + 'users/me');
  };

  //
  return User;

});

climber.factory('$packet', function($config, $http){
  //
  var Packet = {};

  //
  Packet.url = $config.baseUrl + 'api/packets';
  Packet.myPackets = function(){
    return $http.get(Packet.url + '/my-packets');
  };
  Packet.myPacketsCount = function(){
    return $http.get(Packet.url + '/my-packets/count');
  };

  //
  return Packet;
});

climber.controller('header', function($scope){

});

climber.controller('navbar', function($scope){

});
