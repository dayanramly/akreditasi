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

Route::get('/', function () {
    return view('page.home');
});

$router->get('/isidata', function()
{
	return view('page.isi_data');
});

Route::get('auth/login', 'LoginController@getLogin');
Route::post('auth/login', 'LoginController@postLogin');
Route::get('auth/logout', 'LoginController@getLogout');

Route::get('/pertanyaan', 'PertanyaanController@index');

Route::get('/login', function () {
    return view('page.login');
});
Route::get('/newpass', function () {
    return view('page.change_password');
});
Route::get('/asesor', function () {
    return view('page.asesor');
});
Route::get('/lihathasil', function () {
    return view('page.lihathasil');
});
