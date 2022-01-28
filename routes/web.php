<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\StockstarController@index')->name('index');
Route::get('news', 'App\Http\Controllers\StockstarController@news')->name('news');
Route::get('news/{id}', 'App\Http\Controllers\StockstarController@news_detail')->name('news.detail');

Route::get('vision', function () {
    return view('vision');
})->name('vision');

Route::get('service', function () {
    return view('service');
})->name('service');


Route::get('admin/', 'App\Http\Controllers\AdminController@index')->name('admin.index')->middleware('login');
// Route::get('admin/restaurant_list', 'App\Http\Controllers\AdminRestaurantController@restaurant_list')->name('admin.restaurant_list')->middleware('login');
Route::get('admin/news_list', 'App\Http\Controllers\StockstarController@news_list')->name('admin.news_list')->middleware('login');
Route::get('admin/news_regist', 'App\Http\Controllers\StockstarController@news_regist')->name('admin.news_regist')->middleware('login');
Route::post('admin/news_store', 'App\Http\Controllers\StockstarController@news_store')->name('admin.news_store')->middleware('login');
Route::get('admin/news_edit/{id}/', 'App\Http\Controllers\StockstarController@news_edit')->name('admin.news_edit')->middleware('login');
Route::post('admin/news_update', 'App\Http\Controllers\StockstarController@news_update')->name('admin.news_update')->middleware('login');
Route::get('admin/news_delete/{id}/', 'App\Http\Controllers\StockstarController@news_delete')->name('admin.news_delete')->middleware('login');

// ログイン
Route::get('admin/login', function () {
    return view('login');
});
Route::POST('/admin_login', 'App\Http\Controllers\StockstarController@login')->name('admin.login');
Route::get('/admin_logout', 'App\Http\Controllers\StockstarController@logout')->name('admin.logout')->middleware('login');