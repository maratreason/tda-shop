<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/category', [MainController::class, 'category']);
Route::get('/{category}', [MainController::class, 'categoryDetail']);
Route::get('/{category}/{product?}', [MainController::class, 'product']);

// lesson 3
