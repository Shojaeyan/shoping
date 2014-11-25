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

////Admin Routes

		Route::get('admin/dashboard', array('as' => 'admin.dashboard','uses' => 'AdminController@showDashboard'));

Route::get('/', function()
{
	return View::make('pages.home');
	
});
//Route::get('/{user}', array('as' => 'user.show','uses' => 'UserController@showUser'));

Route::get('user/login', array('as' => 'user.login','uses' => 'UserController@showLogin'));
Route::post('user/login', array('uses' => 'UserController@doLogin'));
Route::get('user/logout', array('as' => 'user.logout', 'uses' => 'UserController@doLogout'));
Route::get('user/register', array('as' => 'user.register', 'uses' => 'UserController@showRegister'));
Route::post('user/register', array('uses' => 'UserController@doRegister'));

Route::get('user/update', array('as' => 'user.update', 'uses' => 'UserController@showUpdate'));
Route::post('user/update', array('as' => 'user.update', 'uses' => 'UserController@doUpdate'));

Route::get('user/changepassword', array('as' => 'user.changepassword', 'uses' => 'UserController@showPassword'));
Route::post('user/changepassword', array('as' => 'user.changepassword', 'uses' => 'UserController@doPassword'));


Route::post('login/sample',array('as' => 'login.ajax','uses' => 'UserController@doAjax' ));




