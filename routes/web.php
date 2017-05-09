<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',			'HomeController@index');

Route::get('welcome', function () {
	return view('welcome');
});

Route::get('contact',	'ContactController@index');
Route::resource('recipes',	'RecipesController');

Route::get('account',	'AccountController@index');

Auth::routes();

Route::get('/account', 'AccountController@index');
Route::get('/admin', 'AdminController@index');