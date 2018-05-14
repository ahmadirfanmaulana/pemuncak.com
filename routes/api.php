<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;

use App\Adventure;
use App\Packet;
use App\PacketSelect;
use App\Photo;
use App\RouteNav;
use App\Tag;
use App\Transaction;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('helper/upload', function(Request $request){
  $file = $request->file('file');
  $destinationPath = './upload/' . $request->path;

  $file->move($destinationPath,$file->getClientOriginalName());

  return response([
    'message'=>'Uploaded Successfully !',
    'file_name'=> $file->getClientOriginalName()
  ]);

});

Route::post('helper/uploadAndChange', function(Request $request){
  $file = $request->file('file');
  $destinationPath = './upload/' . $request->path;

  // delete file
  unlink($destinationPath . $request->then);

  // upload file
  $file->move($destinationPath,$file->getClientOriginalName());

  return response([
    'message'=>'Uploaded Successfully !',
    'file_name'=> $file->getClientOriginalName()
  ]);

});

Route::post('helper/deleteFile', function(Request $request){
  $destinationPath = './upload/' . $request->path;

  // delete file
  unlink($destinationPath . $request->then);
  return response([
    'message'=>'Deleted File Successfully !'
  ]);
});

// provinces
Route::get('provinces', 'ApiProvinceController@index');
Route::post('provinces/where', 'ApiProvinceController@show');

// regionals
Route::get('regionals', 'ApiRegionalController@index');
Route::post('regionals/where', 'ApiRegionalController@show');
Route::post('regionals/first', 'ApiRegionalController@first');

// packet item get
Route::get('packet-items', 'ApiPacketItemController@index');
Route::post('packet-items/where', 'ApiPacketItemController@show');
Route::post('packet-items/create', 'ApiPacketItemController@store');
Route::post('packet-items/update', 'ApiPacketItemController@update');
Route::post('packet-items/delete', 'ApiPacketItemController@destroy');
Route::get('packet-items/count', 'ApiPacketItemController@count');


// destinations
Route::post('destinations', 'ApiDestinationController@index');
Route::get('destinations/count', 'ApiDestinationController@count');
Route::post('destinations/where', 'ApiDestinationController@show');
Route::post('destinations/create', 'ApiDestinationController@store');
Route::post('destinations/delete', 'ApiDestinationController@destroy');
Route::post('destinations/update', 'ApiDestinationController@update');
Route::get('destinations/count', 'ApiDestinationController@count');


/*
  ---------
  STEPS
  ---------
*/
Route::get('steps/get', 'ApiStepController@index');
Route::post('steps/find', 'ApiStepController@show');
Route::post('steps/create', 'ApiStepController@store');
Route::post('steps/delete', 'ApiStepController@destroy');
Route::post('steps/update', 'ApiStepController@update');
Route::get('steps/count', 'ApiStepController@count');

/*
  ---------
  POST
  ---------
*/
Route::get('posts/get', 'ApiPostController@index');
Route::post('posts/find', 'ApiPostController@show');
Route::post('posts/create', 'ApiPostController@store');
Route::post('posts/delete', 'ApiPostController@destroy');
Route::post('posts/update', 'ApiPostController@update');
Route::get('posts/count', 'ApiPostController@count');

/*
  ---------
  CLIMBERS
  ---------
*/
Route::get('climbers/get', 'ApiClimberController@index');
Route::get('climbers/count', 'ApiClimberController@count'); 
