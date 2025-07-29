<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminPostController;


Route::get('/', function () {
    return view('home');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/test', function () {
    return view('test');
});



// Show login form (GET)
Route::get('/admin/login237', [LoginController::class, 'showLoginForm'])->name('login');

// Handle login form submission (POST)
Route::post('/admin/login237', [LoginController::class, 'login'])->name('admin.login');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/add_news2', [AdminPostController::class, 'create'])->name('admin.add_news2');
    Route::post('/admin/add_news2', [AdminPostController::class, 'store'])->name('admin.store_news');

Route::post('/image-upload', [AdminPostController::class, 'uploadImage'])->name('image.upload');

    
});
