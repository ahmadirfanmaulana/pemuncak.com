<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// landing page
Route::get('/', 'LandingController@home');
Route::get('/adventures', 'LandingController@adventures');
Route::get('/destinations', 'LandingController@destinations');
Route::get('/camping', 'LandingController@camping');
Route::get('/blog', 'LandingController@blog');
Route::get('/news', 'LandingController@news');
Route::get('/about', 'LandingController@about');
Route::get('/faq', 'LandingController@faq');

// logged
Route::get('/logged', function(){
  if (Auth::user()->level == 'admin') {
    return redirect('/administrator');
  }
  else {
    return redirect('/dashboard');
  }
});

// dashboard
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {

  Route::get('/', 'DashboardController@main');

  Route::get('/index', 'DashboardController@index');

  Route::get('/adventure', 'AdventureController@index');

  Route::get('/climbing', 'ClimbingController@index');

  Route::get('/posts', 'PostsController@index');

  Route::get('/packets', 'PacketsController@index');

});

// administrator
Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function () {

  Route::get('/', 'AdministratorController@main');
  Route::get('/dashboard', 'AdministratorController@index');
  Route::get('/destinations', 'AdministratorController@destinations');
  Route::get('/destinations/new', 'AdministratorController@destinationsCreate');
  Route::get('/packet-items', 'AdministratorController@packetItems');
  Route::get('/packet-items/new', 'AdministratorController@packetItemsCreate');
  Route::get('/packet-items/edit', 'AdministratorController@packetItemsEdit');
  Route::get('/packet-items/delete', 'AdministratorController@packetItemsDelete');
  Route::get('/posts', 'AdministratorController@posts');
  Route::get('/steps', 'AdministratorController@steps');
  Route::get('/users', 'AdministratorController@users');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
