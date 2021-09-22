<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SimcardsController;
use Illuminate\Support\Facades\Route;





Route::get('/', [IndexController::class, 'index']);

Route::get('aboutus', [AboutusController::class, 'index']);
Route::get('news/{news}', [BlogController::class, 'show']);
Route::get('blog/{blog}', [BlogController::class, 'show']);
Route::get('blog', [BlogController::class, 'index']);
Route::get('simkarte', [SimcardsController::class, 'index'])->name('simkarte');
Route::get('kontakt', [ContactController::class, 'index'])->name('kontakt');
Route::post('kontakt', [ContactController::class, 'store'])->name('kontakt.store');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';






require __DIR__ . '/adminAuth.php';



Route::prefix('admin')->middleware('auth:admin')->group(function () {

    Route::get('/', [IndexController::class, 'indexAdmin'])->name('admin.dashboard');
    // Blog
    Route::get('blog', [BlogController::class, 'indexAdmin'])->name('admin.blog.index');
    Route::get('blog/create', [BlogController::class, 'createAdmin'])->name('admin.blog.create'); // form add
    Route::post('blog/create', [BlogController::class, 'storeAdmin'])->name('admin.blog.store'); // add
    Route::get('blog/edit/{blog}', [BlogController::class, 'editAdmin'])->name('admin.blog.edit'); // form edit
    Route::patch('blog/edit/{blog}', [BlogController::class, 'updateAdmin'])->name('admin.blog.update'); // edit
    Route::delete('blog/{blog}', [BlogController::class, 'destroyAdmin'])->name('admin.blog.destroy'); // delete

    // News
    Route::get('news', [NewsController::class, 'indexAdmin'])->name('admin.news.index');
    Route::get('news/create', [NewsController::class, 'createAdmin'])->name('admin.news.create'); // form add
    Route::post('news/create', [NewsController::class, 'storeAdmin'])->name('admin.news.store'); // add
    Route::get('news/edit/{news}', [NewsController::class, 'editAdmin'])->name('admin.news.edit'); // form edit
    Route::patch('news/edit/{news}', [NewsController::class, 'updateAdmin'])->name('admin.news.update'); // edit
    Route::delete('news/{news}', [NewsController::class, 'destroyAdmin'])->name('admin.news.destroy'); // delete
});
