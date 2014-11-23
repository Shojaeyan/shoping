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

Route::get('/', function()
{
	return View::make('pages.home');
	
});
Route::get('login', array('as' => 'login','uses' => 'UserController@showLogin'));
Route::post('login', array('uses' => 'UserController@doLogin'));
Route::get('logout', array('as' => 'logout', 'uses' => 'UserController@doLogout'));
Route::get('register', array('as' => 'register', 'uses' => 'UserController@showRegister'));
Route::post('register', array('uses' => 'UserController@doRegister'));

Route::post('login/sample',array('as' => 'login.ajax','uses' => 'UserController@doAjax' ));