<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// 前台 (不須登入)

// 後台資料 (需登入)
Route::get('/blog', 'BlogController@index'); // 最新消息
Route::get('/blog/create', 'BlogController@create'); // 新增文章
Route::post('/blog/store', 'BlogController@store'); // 文章儲存
Route::get('/blog/edit/{id}', 'BlogController@edit'); // 編輯資料
Route::post('/blog/update/{id}', 'BlogController@update'); // 更新資料
Route::get('/blog/delete/{id}', 'BlogController@delete'); // 刪除資料

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
