<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UploadController;
use Illuminate\Support\Facades\Route;

/**
 *
 * Admin site
 *
 */

Route::group(["prefix" => "admin", "as" => "admin."], function () {
    Route::group(["middleware" => "guest", "as" => "auth.", "controller" => AuthController::class], function() {
        Route::get("login", "index")->name("index");
        Route::post("login", "login")->name("login");
    });
    Route::middleware("auth")->group(function() {
        Route::get("/", [DashboardController::class, "index"])->name("dashboard");
        Route::resource('categories', CategoryController::class);
        Route::resource('posts', PostController::class);
        Route::resource('contacts', ContactController::class);
        Route::group(["as" => "upload.", "controller" => UploadController::class], function () {
            Route::post("file", "handle")->name("file");
            Route::post("file-tmp", "uploadTempFile")->name("file-tmp");
        });
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
