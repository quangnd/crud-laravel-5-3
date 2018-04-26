<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('authorize', 'AuthenticateController@authenticate');
Route::post('register', 'AuthenticateController@signUp');

Route::get('test', [
    'as' => 'test',
    'uses' => 'AuthenticateController@testToken',
    'middleware' => ['jwt.auth']
]);