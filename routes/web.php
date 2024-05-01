<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/store', [AuthController::class, 'store'])->name('storeUser');
Route::post('/auth', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Userview
Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('/category/{id}', [ProductController::class, 'filter'])->name('filter');
Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('detail');

// Route Cart
Route::get('/cart', [CartController::class, 'cart'])->name('cart')->middleware('auth');
Route::post('/cart/store', [CartController::class, 'store'])->name('cartStore')->middleware('auth');
Route::post('/discount', [CartController::class, 'discount'])->name('discount')->middleware('auth');
Route::post('/cart/delete', [CartController::class, 'delete'])->name('cartDelete')->middleware('auth');

// Route Order
Route::get('/order', [OrderController::class, 'order'])->name('order')->middleware('auth');
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout')->middleware('auth');