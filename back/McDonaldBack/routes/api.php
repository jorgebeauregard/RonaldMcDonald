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

//Child
Route::post('/children',     'ChildController@create'); //C
Route::get('/children',      'ChildController@read');   //R
Route::get('/children/{id}', 'ChildController@read');   //R
Route::put('/children',      'ChildController@update'); //U
Route::delete('/children',   'ChildController@delete'); //D

//Companion
Route::post('/companion',     'CompanionController@create'); //C
Route::get('/companion',      'CompanionController@read');   //R
Route::get('/companion/{id}', 'CompanionController@read');   //R
Route::put('/companion',      'CompanionController@update'); //U
Route::delete('/companion',   'CompanionController@delete'); //D
                                                        






