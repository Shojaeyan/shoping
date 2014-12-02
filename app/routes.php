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


Route::group(array('before' => 'auth'), function()
{
	Route::get('admin/dashboard', array('as' => 'admin.dashboard','uses' => 'AdminController@showDashboard'));
	Route::get('admin/changepassword', array('as' => 'admin.changepassword', 'uses' => 'AdminController@showPassword','before' => 'csrf','before' => 'auth'));
	Route::post('{action}/changepassword', array('as' => 'admin.changepassword', 'uses' => 'BaseController@doPassword' ,'before' => 'csrf' , 'before' => 'auth'));
	Route::get('admin/update', array('as' => 'admin.update', 'uses' => 'AdminController@showUpdate','before' => 'csrf','before' => 'auth'));
	Route::post('{action}/update', array('as' => 'admin.update', 'uses' => 'BaseController@doUpdate' ,'before' => 'csrf' , 'before' => 'auth'));	
	Route::get('admin/user/delete/{id}',array('as' => 'admin.user.delete', 'uses' => 'AdminController@deleteUser','before' => 'csrf','before' => 'auth'))->where('id', '[0-9]+'); 			
	Route::get('admin/users',array('as' => 'admin.users', 'uses' => 'AdminController@showUsers','before' => 'csrf','before' => 'auth'));
	Route::controller('admin/categories' ,'CategoriesController');
});

Route::get('/', function()
{
	return View::make('pages.home');
});

Route::get('/{user}', array('as' => 'user.show','uses' => 'UserController@showUser'));

Route::get('user/login', array('as' => 'user.login','uses' => 'UserController@showLogin'));
Route::post('user/login', array('uses' => 'UserController@doLogin','before' => 'csrf'));
Route::get('user/logout', array('as' => 'user.logout', 'uses' => 'UserController@doLogout','before' => 'auth'));
Route::get('user/register', array('as' => 'user.register', 'uses' => 'UserController@showRegister'));
Route::post('user/register', array('uses' => 'UserController@doRegister','before' => 'csrf'));

Route::get('user/update', array('as' => 'user.update', 'uses' => 'UserController@showUpdate','before' => 'auth'));
Route::post('user/update', array('as' => 'user.update', 'uses' => 'BaseController@doUpdate','before' => 'csrf','before' => 'auth'));

Route::get('user/changepassword', array('as' => 'user.changepassword', 'uses' => 'UserController@showPassword','before' => 'auth'));
Route::post('user/changepassword', array('as' => 'user.changepassword', 'uses' => 'BaseController@doPassword' ,'before' => 'csrf' , 'before' => 'auth'));


Route::post('login/sample',array('as' => 'login.ajax','uses' => 'UserController@doAjax' ));




