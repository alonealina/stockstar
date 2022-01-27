<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\StockstarController@index')->name('index');
Route::get('news', 'App\Http\Controllers\StockstarController@news')->name('news');
Route::get('news/{id}', 'App\Http\Controllers\StockstarController@news_detail')->name('news.detail');

// Route::get('/', function () {
//     return view('index');
// });

Route::get('vision', function () {
    return view('vision');
})->name('vision');

Route::get('service', function () {
    return view('service');
})->name('service');
