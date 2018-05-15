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
Route::get('/', 'LandingController@home')->name('home');
Route::get('/adventures', 'LandingController@adventures');
Route::get('/destinations', 'LandingController@destinations')->name('destination');
Route::get('/destinations/{id}/detail', 'LandingController@destinationsDetail')->name('destination_detail');
Route::get('/blog', 'LandingController@blog')->name('blog');
Route::get('/blog/{id}/detail', 'LandingController@blog_detail')->name('blog_detail');
Route::get('/news', 'LandingController@news');
Route::get('/about', 'LandingController@about');
Route::get('/faq', 'LandingController@faq');


Route::middleware('auth')->group(function(){

  // logged
  Route::get('/logged', function(){
    if (Auth::user()->level == 'admin') {
      return redirect('/administrator');
    }
    else {
      return redirect('/climber');
    }
  })->name('logged');

  // dashboard user
  Route::middleware('climber')->prefix('climber')->group(function () {
    Route::get('/', function(){ return redirect()->route('climber_dashboard'); })->name('climber');
    Route::get('/dashboard', 'ClimberController@index')->name('climber_dashboard');
    Route::get('/adventure', 'ClimberController@adventure')->name('climber_adventure');
    Route::get('/posts', 'ClimberController@posts')->name('climber_posts');
    Route::get('/packets', 'ClimberController@packets')->name('climber_packets');
  });

  // administrator
  Route::middleware('admin')->prefix('administrator')->group(function () {
    Route::get('/', function(){ return redirect()->route('admin_dashboard'); })->name('admin');
    Route::get('/dashboard', 'AdministratorController@index')->name('admin_dashboard');
    Route::get('/destinations', 'AdministratorController@destinations')->name('admin_destinations');
    Route::get('/destinations/home', function(){ return view('site.admin.destinations.home'); });
    Route::get('/destinations/edit', function(){ return view('site.admin.destinations.edit'); });
    Route::get('/packet-items', 'AdministratorController@packetItems')->name('admin_packet-items');
    Route::get('/posts', 'AdministratorController@posts')->name('admin_posts');
    Route::get('/steps', 'AdministratorController@steps')->name('admin_steps');
    Route::get('/climbers', 'AdministratorController@climbers')->name('admin_climbers');
  });

  Route::get('users/me', 'ApiUserController@me');
});

Auth::routes();
