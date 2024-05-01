<?php

use App\Http\Controllers\Admin\AdminIndexController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Main\ShowController;
use App\Http\Controllers\Personal\CommentController;
use App\Http\Controllers\Personal\LikeController;
use App\Http\Controllers\Personal\PersonalIndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', IndexController::class)->name('main.index');
Route::get('/{post}', ShowController::class)->name('main.show')->where('post', '[0-9]+');


Route::group(['middleware' => ['auth:web', 'verified']], function () {
    Route::group(['prefix' => 'personal'], function () {
        Route::get('/', PersonalIndexController::class)->name('personal.main.index');
        Route::resource('likes', LikeController::class);
        Route::resource('comments', CommentController::class);
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/', AdminIndexController::class)->name('admin.main.index');
        Route::resource('users', UserController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('tags', TagController::class);
        Route::resource('posts', PostController::class);

    });
});


Auth::routes(['verify' => true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


