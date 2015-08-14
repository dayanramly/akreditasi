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
    Route::get('/isidata', 'HomeController@index');
	Route::get('/pertanyaan', 'PertanyaanController@index');
    Route::get('/newpass', 'HomeController@index');
    Route::get('/asesor', 'HomeController@index');
    Route::get('/lihathasil', 'HomeController@index');

	// Route::get('/isidata', function()
	// {
	// 	return view('page.isi_data');
	// });

	// Route::get('/newpass', function () {
	// 	return view('page.change_password');
	// });
	// Route::get('/asesor', function () {
	// 	return view('page.asesor');
	// });
	// Route::get('/lihathasil', function () {
	// 	return view('page.lihathasil');
	// });
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');