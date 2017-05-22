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
// Route::get('/admin', 'AdminController@index');



// ADMIN ROLES ONLY
Route::group(['middleware' => ['mustHaveRole:admin']], function () {
    Route::get('/home/admin', 'HomeController@admin');
});

// MEETING MANAGERS ONLY
Route::group(['middleware' => ['mustHaveRole:meeting manager']], function () {
    Route::get('/home/meeting', 'HomeController@meeting');
});

// ANYONE WITH PERMISSION ONLY
Route::group(['middleware' => ['mustHavePermission:modify user accounts']], function () {
	Route::get('/home/modify-accounts', 'HomeController@modifyAccounts');
	Route::get('/home/modify-accounts/{user}/edit', 'HomeController@editAccount');
	Route::post('/home/modify-accounts/{user}/roles', 'HomeController@toggleRoles');
	Route::post('/home/modify-accounts/{user}/permissions', 'HomeController@togglePermissions');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
