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

  Route::get('/', 'DashboardController@index');

  Route::get('/adventure', 'DashboardController@index');

  Route::get('/climbing', 'DashboardController@index');

  Route::get('/posts', 'PostsController@index');

  Route::get('/packets', 'PacketsController@index');

});

// administrator
Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function () {

  Route::get('/', 'AdministratorController@index');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
