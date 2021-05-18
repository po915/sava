<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index']);
Route::get('/program', [MainController::class, 'program']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/shop', [MainController::class, 'shop']);
Route::get('/membership', [MainController::class, 'membership']);
Route::get('/login', [MainController::class, 'login']);
Route::get('/signup', [MainController::class, 'signup']);
Route::get('/schedule', [MainController::class, 'schedule']);
Route::get('/product-detail', [MainController::class, 'productDetail']);
Route::get('/program-detail', [MainController::class, 'programDetail']);
Route::get('/product-cart', [MainController::class, 'productCart']);
Route::get('/program-cart', [MainController::class, 'programCart']);
Route::get('/checkout-one', [MainController::class, 'checkoutOne']);
Route::get('/checkout-two', [MainController::class, 'checkoutTwo']);
Route::get('/checkout-three', [MainController::class, 'checkoutThree']);
