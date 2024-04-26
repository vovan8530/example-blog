<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', IndexController::class);


Route::group(['prefix' => 'admin'], function () {
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


