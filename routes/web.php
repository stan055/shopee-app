<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::resource('/product', App\Http\Controllers\ProductController::class);

Route::get('/add-to-cart/{id}', [App\Http\Controllers\ProductController::class, 'addToCart']);

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/cart/delete/{id}', [App\Http\Controllers\CartController::class, 'deleteFromId']);

