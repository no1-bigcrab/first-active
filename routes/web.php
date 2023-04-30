<?php

use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\CheckoutController;
use App\Http\Controllers\client\DetailPageController;
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
Route::get('/products/product_id/{id}', [DetailPageController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);

//shopping cart
Route::group(['prefix' => 'cart'], function () {
    Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update.cart', [CartController::class, 'updateCart'])->name('update.cart');
    Route::delete('remove.from.cart', [CartController::class, 'remove'])->name('remove.from.cart');
});
