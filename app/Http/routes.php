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
// 登录页面
Route::get('/admin/login', 'Admin\LoginController@index');
// 获取验证码
Route::get('/admin/code', 'Admin\LoginController@code');
// 登录信息处理页面
Route::post('/admin/dologin', 'Admin\LoginController@dologin');
// 处理登录
Route::get('/admin/logout', 'Admin\LoginController@logout');


// 后台管理组
Route::group(['prefix' => 'admin', 'middleware' => 'login','namespace'=>'Admin'],function(){
    //   后台主页模块
    Route::get('index', 'IndexController@index');      // 网站后台主页
    Route::get('index/edit', 'IndexController@edit');   //登录后的用户修改密码页面
    Route::post('index/update', 'IndexController@update');   //修改密码处理

    //    后台分类模块
    Route::resource('cate', 'CateController');   // 分类管理
    Route::get('ajaxcate', 'IndexController@ajaxcate');  //分类列表的一个ajax请求

    //    后台用户模块
    Route::resource('user', 'UserController');  //后台用户资源路由
    Route::post('checkname', 'UserController@checkName');   //发送ajax 判断用户是否存在路由

    //   后台底部模块
    Route::resource('buttom','ButtomController');

    //   订单模块
    Route::resource('order','OrderController');

    //购物车
    Route::resource('cart','CartController');
});

