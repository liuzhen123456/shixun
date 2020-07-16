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
Route::get('/a','LoginController@a');
Route::get('/', function () {
    return view('welcome');
});
//注册登录
Route::get('/login','LoginController@login');
Route::post('/login_do','LoginController@login_do');
Route::get('/reg','LoginController@reg');
Route::post('/sreg_do','LoginController@reg_do');

//用户个人中心
Route::prefix('user')->middleware('checklogin')->group(function (){
   Route::get('index','UserController@index');
});

//测试

Route::get('test','LoginController@test');
