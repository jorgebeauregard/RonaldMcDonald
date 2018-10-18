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

Route::group(['middleware' => 'cors'], function() {
    //Child
    Route::post('/children',     'ChildController@create'); //C
    Route::get('/children',      'ChildController@read');   //R
    Route::get('/children/{id}', 'ChildController@read');   //R
    Route::put('/children',      'ChildController@update'); //U
    Route::delete('/children',   'ChildController@delete'); //D
 
    //Companion 
    Route::get('/children/companions/{id}', 'ChildController@getCompanions');

    //Companion
    Route::post('/companions',     'CompanionController@create'); //C
    Route::get('/companions',      'CompanionController@read');   //R
    Route::get('/companions/{id}', 'CompanionController@read');   //R
    Route::put('/companions',      'CompanionController@update'); //U
    Route::delete('/companions',   'CompanionController@delete'); //D

    

    //State
    Route::post('/state',     'StateController@create'); //C
    Route::get('/state',      'StateController@read');   //R
    Route::get('/state/{id}', 'StateController@read');   //R
    Route::put('/state',      'StateController@update'); //U
    Route::delete('/state',   'StateController@delete'); //D
                                                            


 });










