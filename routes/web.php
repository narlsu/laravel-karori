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
Route::resource('/crate', 'CrateController');


// ADMIN ROLES ONLY
Route::group(['middleware' => ['mustHaveRole:admin']], function () {
    Route::get('/home/admin', 'HomeController@admin');
});

// MEETING MANAGERS ONLY
Route::group(['middleware' => ['mustHaveRole:meeting manager']], function () {
    Route::get('/home/meeting', 'HomeController@meeting');
});
// PASSWORD RESET
Route::get('/changepassword', function(){
	return view('auth.changepassword');
});
Route::post('change/password', function(){
	$User = user::find(Auth::user()->id);

	if(Hash::check(Input::get('passwordold'), $User['password']) && Input::get('password') == Input::get('password_confirmation')){
		$User->password = bcrypt(Input::get('password'));
		$User->save();
		return back()->with('success','Password Changed');
	} else {
		return back()->with('error','Password NOT Changed');
	}

});
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
