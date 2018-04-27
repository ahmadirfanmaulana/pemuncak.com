<?php

use Illuminate\Http\Request;

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

Route::get('provinces', function(){
  return response(App\Province::all());
});

Route::get('regionals', function(){
  return response(App\Regional::all());
});

Route::post('regionals/first', function(Request $request){

  return response(App\Regional::where($request->all())->get());
});

Route::get('packet-items', function(){
  return response(App\PacketItem::orderBy('id', 'desc')->get());
});

Route::post('packet-items/first', function(Request $request){
  return response(App\PacketItem::where($request->all())->first());
});

Route::post('packet-items/create', function(Request $request){
  App\PacketItem::create($request->all());
  return response(['message'=>'Packet Items Created Successfully !']);
});

Route::post('packet-items/edit', function(Request $request){
  App\PacketItem::find($request->id);
  App\PacketItem::update($request->all());
  return response(['message'=>'Packet Items Update Successfully !']);
});

Route::post('packet-items/delete', function(Request $request){
  App\PacketItem::destory($request->id);

  return response(['message'=>'Packet Items Deleted Successfully !']);
});
