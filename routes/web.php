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


Route::get('contact',	'ContactController@index');
// Route Lockout. Must be admin to access these routes
Route::group(['middleware' => ['mustHaveRole:admin']], function () {
	Route::resource('recipes',	'RecipesController');
	
	Route::get('/recipes/create', 'RecipesController@create');
	Route::post('/recipes/store', 'RecipesController@store');
	Route::post('/recipes/update/{id}', 'RecipesController@update');
	Route::get('/recipes/edit/{id}', 'RecipesController@edit');
	Route::get('/recipes/delete/{id}', 'RecipesController@destroy');
});
	Route::get('/recipes', 	'RecipesController@index');
	Route::get('/recipes/{recipe}', 	'RecipesController@show');


Auth::routes();



// ANYONE WITH PERMISSION ONLY
Route::group(['middleware' => ['mustHavePermission:modify user accounts']], function () {
	Route::get('/home/modify-accounts', 'HomeController@modifyAccounts');
	Route::get('/home/modify-accounts/{user}/edit', 'HomeController@editAccount');
	Route::post('/home/modify-accounts/{user}/roles', 'HomeController@toggleRoles');
	Route::post('/home/modify-accounts/{user}/permissions', 'HomeController@togglePermissions');
});

Auth::routes();
// curl.cainfo = "C:/xampp/apache/bin/curl-ca-bundle.crt"
// Route::get('/home', 'HomeController@index')->name('home');
