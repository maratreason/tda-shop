<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/shop', [MainController::class, 'shop'])->name('shop');
Route::get('/category', [MainController::class, 'category'])->name('catalog');

Route::get('/basket', [MainController::class, 'basket'])->name('basket');
Route::get('/basket/place', [MainController::class, 'basketPlace'])->name('basket-place');

Route::get('/{category}', [MainController::class, 'categoryDetail'])->name('category-detail');
Route::get('/{category}/{product?}', [MainController::class, 'product'])->name('product');
