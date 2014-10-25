<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');

Route::get('/hello', function() {
	return View::make('hello');
});

Route::get('/users', 'UserController@list_all_users');
Route::post('/users', 'UserController@add_user');
Route::get('/users/{id}', 'UserController@show_user');
