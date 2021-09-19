<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;





Route::get('/', [IndexController::class, 'index']);

Route::get('aboutus', [AboutusController::class, 'index']);
Route::get('blog/{blog}', [BlogController::class, 'show']);
Route::get('blog', [BlogController::class, 'index']);

Route::get('start', function () {
    return 'Startseite';
});
Route::get('simkarte', function () {
    return 'Simmmm';
});
Route::get('anmeldung', function () {
    return 'Anmeldung';
});
Route::get('kontact', function () {
    return 'Kontakt';
});

//Route::get('blog', [,'index']);
//Route::get('news', [,'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


//Route::get('blog', [,'index']);
//Route::get('news', [,'index']);





require __DIR__ . '/adminAuth.php';



Route::prefix('admin')->middleware('auth:admin')->group(function () {

    Route::get('/', [IndexController::class, 'indexAdmin']);

    Route::get('blog', [BlogController::class, 'indexAdmin'])->name('admin.blog.index');
    Route::get('blog/create', [BlogController::class, 'createAdmin'])->name('admin.blog.create'); // form add
    Route::post('blog/create', [BlogController::class, 'storeAdmin'])->name('admin.blog.store'); // add
    Route::get('blog/{blog}', [BlogController::class, 'editAdmin'])->name('admin.blog.edit'); // form edit
    Route::patch('blog/{blog}', [BlogController::class, 'updateAdmin'])->name('admin.blog.update'); // edit
    Route::delete('blog/{blog}', [BlogController::class, 'destroyAdmin'])->name('admin.blog.destroy'); // delete

});
