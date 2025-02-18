<?php

use App\Http\Admin\Controllers\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/**
 *
 * Admin site
 *
 */

Route::group(["prefix" => "admin", "as" => "admin."], function () {
    Route::group(["as" => "auth.", "controller" => AuthController::class], function() {
        Route::get("login", "index")->name("index");
        Route::post("login", "login")->name("login");
    });
    Route::middleware("auth")->group(function() {
        Route::get("/", ["controller" => DashboardController::class, "action" => "index"])->name("dashboard");
        Route::resource('categories', CategoryController::class);
        Route::resource('posts', PostController::class);
    });
});


/**
 *
 * Guest site
 *
 */
Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/detail', [BlogController::class, 'detail'])->name('blog.detail');
});
