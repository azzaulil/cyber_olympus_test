<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/user', function () {
    return view('user');
});

// Route::get('test', [OrderController::class, 'index']);

Route::get('order', [OrderController::class, 'index'])->name('order-list');
Route::get('product', [ProductController::class, 'index'])->name('product-list');
Route::get('category', [CategoryController::class, 'index'])->name('category-list');

