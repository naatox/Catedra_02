<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(ProductController::class)->group(function () {
    Route::get('products', 'products');
    Route::delete('products', 'deleteProduct');
    Route::patch('update', 'update');
    Route::post('store', 'store');
    Route::get('images', 'images');
});
Route::controller(UserController::class)->group(function () {
    Route::get('user', 'user');
});
