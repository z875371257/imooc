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
//
// 记录 sql 语句
//Event::listen('illuminate.query',function($query){
//    var_dump($query);
//});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', 'Admin\LoginController@index');
Route::get('/admin/code', 'Admin\LoginController@code');
Route::post('/admin/dologin', 'Admin\LoginController@dologin');
Route::get('/admin/logout', 'Admin\LoginController@logout');

Route::group(['prefix' => 'admin', 'middleware' => 'login','namespace'=>'Admin'],function(){
    Route::get('index', 'IndexController@index');
    Route::get('layout', 'IndexController@layout');

//    后台用户模块
//    后台用户资源路由
    Route::resource('user', 'UserController');

//    发送ajax 判断用户是否存在路由
    Route::post('checkname', 'UserController@checkName');

});

