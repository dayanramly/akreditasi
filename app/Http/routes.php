<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



// Route::group(['middleware' => 'guest'], function(){
// 	Route::get('auth/login', 'Auth\AuthController@getLogin');
// 	Route::post('auth/login', 'Auth\AuthController@postLogin');
// 	Route::get('auth/logout', 'Auth\AuthController@getLogout');
// });

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'HomeController@index');    
    Route::get('/isidata', 'HomeController@formdata');
    Route::post('/isidata', 'HomeController@isidata');
    Route::get('/pertanyaan', 'PertanyaanController@index');
	Route::post('/pertanyaan', 'PertanyaanController@simpan');
    Route::get('/newpass', 'HomeController@newpass');
    Route::get('/asesor', 'HomeController@asesor');
    Route::get('/lihathasil', 'HomeController@lihathasil');
    Route::get('/user/{id}', 'HomeController@user');
    Route::get('/user/edit/{id}/{groupid}', 'HomeController@formEdit');
    Route::post('/user/edit/{id}/{groupid}', 'HomeController@userEdit');

});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
