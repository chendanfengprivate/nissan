<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('getAccessToken', 'AccessTokenController@getAccessToken')->name('getAccessToken');
Route::get('getCouponList', 'CouponController@getCouponList')->name('getCouponList');



Route::get('/', 'HomeController@index')->name('home.index');
/**********************************  用户模块  ******************************************************/
Route::group(['namespace' => 'User'], function(){
    Route::get('user/index', 'UserController@index')->name('user.index');
    Route::get('user/list', 'UserController@getList')->name('user.list');
    Route::get('user/add', 'UserController@add')->name('user.add');
    Route::post('user/save', 'UserController@save')->name('user.save');
    Route::get('user/export', 'UserController@export')->name('user.export');
});
/**********************************  上传模块  ******************************************************/
Route::group(['namespace' => 'Upload'], function(){
    Route::post('upload', 'UploadController@upload')->name('upload');
});
