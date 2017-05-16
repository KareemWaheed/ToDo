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

Route::resource('tasks','TasksController');
Route::post('tasks/{tasks}/edit','TasksController@edit');
Route::auth();
Route::get('/home', 'TasksController@index');
Route::get('/', 'TasksController@index');
Route::patch('tasks/{tasks}/setStatus','TasksController@setTaskStatus');




