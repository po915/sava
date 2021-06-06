<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use Illuminate\Support\Arr;

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
Route::get('/product-detail/{id}', [MainController::class, 'productDetail']);
Route::get('/program-detail/{id}', [MainController::class, 'programDetail']);
Route::get('/product-cart', [MainController::class, 'productCart']);
Route::get('/program-cart', [MainController::class, 'programCart']);
Route::get('/checkout-one', [MainController::class, 'checkoutOne']);
Route::get('/checkout-two', [MainController::class, 'checkoutTwo']);
Route::get('/checkout-three', [MainController::class, 'checkoutThree']);



/////////// Programs
Route::get('/program-venom', [MainController::class, 'programVenom']);
Route::get('/deadlift-peak', [MainController::class, 'programDeadliftPeak']);
Route::get('/deadlift-focus', [MainController::class, 'programDeadliftFocus']);
Route::get('/deadlift-boost', [MainController::class, 'programDeadliftBoost']);
Route::get('/full-force', [MainController::class, 'fullForce']);
Route::get('/reload', [MainController::class, 'reLoad']);
Route::get('/rage', [MainController::class, 'rage']);

Route::any('/test', function () {
  $ss = array("a", "b", "c");
  echo gettype(json_encode($ss));
  // echo "<script> console.log(JSON.stringify(['a', 'b'])) </script>";
});
