<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;




Route::prefix('/')->group(function () {

    Route::get('', [IndexController::class, 'index']);

    Route::get('aboutus', [AboutusController::class, 'index']);
    Route::get('blog/{blog}', [BlogController::class, 'show']);

    Route::get('start', function () {
        return 'Startseite';
    });
    Route::get('simkarte', function () {
        return 'Simmmm';
    });
    Route::get('anmeldung', function () {
        return 'Anmeldung';
    });
    Route::get('kontakt', function () {
        return 'Kontakt';
    });
});

//Route::get('blog', [,'index']);
//Route::get('news', [,'index']);


Route::prefix('admin')->group(function () {

    Route::get('/', [IndexController::class, 'indexAdmin']);

    Route::get('blog', [BlogController::class, 'indexAdmin']);
    Route::get('blog/create', [BlogController::class, 'createAdmin'])->name('admin.blog.create'); // form add
    Route::post('blog/create', [BlogController::class, 'storeAdmin'])->name('admin.blog.store'); // add
    Route::get('blog/{blog}', [BlogController::class, 'editAdmin'])->name('admin.blog.edit'); // form edit
    Route::patch('blog/{blog}', [BlogController::class, 'updateAdmin'])->name('admin.blog.update'); // edit
    Route::delete('blog/{blog}', [BlogController::class, 'destroyAdmin'])->name('admin.blog.destroy'); // delete
});
