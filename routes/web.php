<?php

use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\ShopPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopPageController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
