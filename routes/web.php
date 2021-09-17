<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class,'index']);
Route::get('/aboutus', [AboutusController::class,'index']);
Route:: get('/start', function () {
    return 'Startseite';
});
//Route::get('blog', [,'index']);
//Route::get('news', [,'index']);


Route::prefix('admin')->group(function () {
    Route::get('blog', [BlogController::class, 'indexAdmin']);
//    Route::get('blog/create', [BlogController::class, 'createAdmin']); // form add
//    Route::post('blog/create', [BlogController::class, 'storeAdmin']); // add
//    Route::get('blog/{blog}', [BlogController::class, 'editAdmin']); // form edit
//    Route::patch('blog/{blog}', [BlogController::class, 'updateAdmin']); // edit
//    Route::delete('blog/{blog}', [BlogController::class, 'destroyAdmin']); // delete
});
