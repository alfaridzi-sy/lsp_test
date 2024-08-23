<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('product')->group(function() {
    Route::get('/product-list', [APIController::class, 'getProductList']);
    Route::post('/product-detail', [APIController::class, 'getProductDetail']);
});

Route::prefix('order')->group(function() {
    Route::post('/place-order', [APIController::class, 'placeOrder']);
    Route::post('/order-history', [APIController::class, 'orderHistory']);
    Route::post('/active-order', [APIController::class, 'activeOrder']);
    Route::post('/order-detail', [APIController::class, 'orderDetail']);
    Route::post('/change-status', [APIController::class, 'changeStatus']);
    Route::post('/user-order', [APIController::class, 'userOrder']);
});
