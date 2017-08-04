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

Route::get('/admin/login', 'Admin\LoginController@index');
Route::get('/admin/code', 'Admin\LoginController@code');
Route::post('/admin/dologin', 'Admin\LoginController@dologin');
Route::get('/admin/logout', 'Admin\LoginController@logout');

Route::group(['prefix' => 'admin', 'middleware' => 'login'],function(){
    Route::get('index', 'Admin\IndexController@index');
    Route::get('layout', 'Admin\IndexController@layout');

});

