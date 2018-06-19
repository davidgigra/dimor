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
    return view('welcome');
});

Route::group(['prefix' => 'in','middleware' => 'auth'], function () {

	Route::get('/dashboard', [

	 'uses' => 'dashboardController@show',
	 'as' => 'in.dashboard'

	]);

	Route::post('/butget', [

	 'uses' => 'dashboardController@store',
	 'as' => 'in.butget'

	]);

	Route::get('/butget', [

	 'uses' => 'dashboardController@index',
	 'as' => 'in.butget'

	]);

	Route::get('butgetview/{id}', [

	 'uses' => 'dashboardController@view',
	 'as' => 'butgetview'

	]);

});




Route::group(['prefix' => 'esto'], function () {


    Route::get('prueba/{id}', [

	 'uses' => 'testController@view',
	 'as' => 'usersview'

	]);

});

Route::get('auth/login', [

	 'uses' => 'Auth\AuthController@getLogin',
	 'as' => 'auth.login'

]);

Route::post('auth/login', [

	 'uses' => 'Auth\AuthController@postLogin',
	 'as' => 'Auth.login'

]);

Route::get('auth/logout', [

	 'uses' => 'Auth\AuthController@getLogout',
	 'as' => 'auth.logout'

]);




