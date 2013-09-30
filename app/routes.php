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

Route::get('/', 'HomeController@index');
Route::get('signin', 'AuthController@signin');
Route::get('signup', 'AuthController@signup');
Route::post('create-user', 'AuthController@createUser');
Route::get('schedule', 'ScheduleController@index');
Route::get('settings', 'SettingsController@index');