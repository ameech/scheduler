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

App::bind('Scheduler\Settings\SettingsRepositoryInterface', 'Scheduler\Settings\DbSettingsRepository');
App::bind('Scheduler\Schedule\ScheduleRepositoryInterface', 'Scheduler\Schedule\DbScheduleRepository');

//$test = App::make('ScheduleRepositoryInterface');
//die(var_dump($test));

Route::get('/', 'HomeController@index');
Route::get('signin', 'AuthController@signin');
Route::get('signup', 'AuthController@signup');
Route::get('schedule', 'ScheduleController@index');