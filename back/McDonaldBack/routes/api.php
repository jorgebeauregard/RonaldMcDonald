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
    Route::post('/child',     'ChildController@create'); //C
    Route::get('/child',      'ChildController@read');   //R
    Route::get('/child/{id}', 'ChildController@read');   //R
    Route::put('/child',      'ChildController@update'); //U
    Route::delete('/child',   'ChildController@delete'); //D
 
    //Companion 
    Route::get('/child/companions/{id}', 'ChildController@getCompanions');

    //Companion
    Route::post('/companion',     'CompanionController@create'); //C
    Route::get('/companion',      'CompanionController@read');   //R
    Route::get('/companion/{id}', 'CompanionController@read');   //R
    Route::put('/companion',      'CompanionController@update'); //U
    Route::delete('/companion',   'CompanionController@delete'); //D

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
    
    //Social Worker
    Route::post('/social-worker',     'SocialWorkerController@create'); //C
    Route::get('/social-worker',      'SocialWorkerController@read');   //R
    Route::get('/social-worker/{id}', 'SocialWorkerController@read');   //R
    Route::put('/social-worker/{id}', 'SocialWorkerController@update'); //U
    Route::delete('/social-worker',   'SocialWorkerController@delete'); //D

    //Treatment
    Route::post('/treatment',     'TreatmentController@create'); //C
    Route::get('/treatment',      'TreatmentController@read');   //R
    Route::get('/treatment/{id}', 'TreatmentController@read');   //R
    Route::put('/treatment/{id}', 'TreatmentController@update'); //U
    Route::delete('/treatment',   'TreatmentController@delete'); //D

    //Diet
    Route::post('/diet',     'DietController@create'); //C
    Route::get('/diet',      'DietController@read');   //R
    Route::get('/diet/{id}', 'DietController@read');   //R
    Route::put('/diet/{id}', 'DietController@update'); //U
    Route::delete('/diet',   'DietController@delete'); //D

    //Room
    Route::post('/room',     'RoomController@create'); //C
    Route::get('/room',      'RoomController@read');   //R
    Route::get('/room/{id}', 'RoomController@read');   //R
    Route::put('/room/{id}', 'RoomController@update'); //U
    Route::delete('/room',   'RoomController@delete'); //D
    

    Route::get('/dashboard', 'CheckInController@dashboard');
 });
