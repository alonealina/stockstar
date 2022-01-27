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
Route::get('admin/news_list', 'App\Http\Controllers\StockstarController@news_list')->name('admin.news_list');
