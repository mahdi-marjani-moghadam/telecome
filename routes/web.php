<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class,'index']);
Route::get('aboutus', [AboutusController::class,'index']);
