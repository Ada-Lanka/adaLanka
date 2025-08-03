<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\LatestPostController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;   
use App\Http\Controllers\NewsController;
Route::get('/posts', function () {
    return view('posts');
});

Route::get('/test', function () {
    return view('test');
});
Route::get('/home', function () {
    return view('home');
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



Route::get('/categories/{category}/{page?}', [CategoryController::class, 'show'])
    ->name('categories.show')
    ->where('page', '[0-9]+');

 



Route::get('/', [HomeController::class, 'index']);



Route::get('/subcategories/top-news', [SubCategoryController::class, 'showTopNews']);
Route::get('/subcategories/trending', [SubCategoryController::class, 'showTrending']);


Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::post('/news/{slug}/comment', [NewsController::class, 'submitComment'])->name('news.comment');
