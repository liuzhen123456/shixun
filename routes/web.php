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

Route::get('/', function () {
    return view('welcome');
});
Route::get('login','LoginController@login');
Route::post('login_do','LoginController@login_do');
Route::get('reg','LoginController@reg');
Route::post('reg_do','LoginController@reg_do');
Route::prefix('user')->group(function (){
   Route::get('index','UserController@index');
});

