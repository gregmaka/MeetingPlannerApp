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

Route::get('/', function()
{
    return view('auth.login',[]);
});

Route::get('home', ['middleware' => 'auth', 'uses' => 'PagesController@home']);
Route::get('about', ['middleware' => 'auth', 'uses' => 'PagesController@about']);
Route::get('articles', ['middleware' => 'auth', 'uses' => 'ArticlesController@index']);



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
