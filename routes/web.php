<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', 'App\Http\Controllers\CponController@index')->name('index');
// Route::get('restaurants/{id}/show', 'App\Http\Controllers\RestaurantController@show')->name('restaurant.show');

Route::get('/', function () {
    return view('index');
});

Route::get('vision', function () {
    return view('vision');
})->name('vision');
