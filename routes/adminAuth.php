<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RegisteredUserController;
use App\Http\Controllers\Admin\AuthenticatedSessionController;



Route::get('admin', function () {
    return view('backend.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

Route::get('admin/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest:admin')
    ->name('admin.register');

Route::post('admin/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest:admin');

Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest:admin')
    ->name('admin.login');

Route::post('admin/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest:admin');
Route::post('admin/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('admin.logout')
    ->middleware('auth:admin');
