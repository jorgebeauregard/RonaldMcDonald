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
    Route::put('/state/{id}', 'StateController@update'); //U
    Route::delete('/state',   'StateController@delete'); //D

    //Doctor
    Route::post('/doctor',     'DoctorController@create'); //C
    Route::get('/doctor',      'DoctorController@read');   //R
    Route::get('/doctor/{id}', 'DoctorController@read');   //R
    Route::put('/doctor/{id}', 'DoctorController@update'); //U
    Route::delete('/doctor',   'DoctorController@delete'); //D
    
    //Diagnosis
    Route::post('/diagnosis',     'DiagnosisController@create'); //C
    Route::get('/diagnosis',      'DiagnosisController@read');   //R
    Route::get('/diagnosis/{id}', 'DiagnosisController@read');   //R
    Route::put('/diagnosis/{id}', 'DiagnosisController@update'); //U
    Route::delete('/diagnosis',   'DiagnosisController@delete'); //D

    //Hospital
    Route::post('/hospital',     'HospitalController@create'); //C
    Route::get('/hospital',      'HospitalController@read');   //R
    Route::get('/hospital/{id}', 'HospitalController@read');   //R
    Route::put('/hospital/{id}', 'HospitalController@update'); //U
    Route::delete('/hospital',   'HospitalController@delete'); //D
    
 });
