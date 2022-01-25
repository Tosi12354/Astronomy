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
Route::get('/blog', 'BlogController@index'); // 最新消息
Route::get('/map', 'FrontController@map'); // 地圖
Route::get('/information', 'FrontController@information'); // 天文情報
Route::get('/season', 'FrontController@season'); // 四季星象
Route::get('/about', 'FrontController@about'); // about

// 後台資料 (需登入)
Route::prefix('/blog')->middleware(['auth'])->group(function(){
    Route::get('/create', 'BlogController@create'); // 新增文章
    Route::post('/store', 'BlogController@store'); // 文章儲存
    Route::get('/edit/{id}', 'BlogController@edit'); // 編輯資料
    Route::post('/update/{id}', 'BlogController@update'); // 更新資料
    Route::get('/delete/{id}', 'BlogController@delete'); // 刪除資料
});

Route::get('/trade', 'FrontController@trade'); // 頁面跳轉
Route::get('/create', 'FrontController@create'); // 填資料
Route::post('/store', 'FrontController@store'); // 儲存
Route::middleware(['auth'])->get('/data', 'FrontController@data'); // 放資料


Route::get('/', function () {
    return view('front.index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
