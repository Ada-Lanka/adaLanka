<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;



Route::get('/', function () {
    return view('home');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/test', function () {
    return view('test');
});

// secret login page for admins
Route::post('/admin/login237', [LoginController::class, 'login'])->name('admin.login');

//
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/add_news2', [AdminPostController::class, 'create'])->name('admin.add_news2');
    Route::post('/admin/add_news2', [AdminPostController::class, 'store'])->name('admin.store_news');
});
