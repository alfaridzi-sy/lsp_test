<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [FrontEndController::class, 'index'])->name('customer.beranda');

//Login
Route::get('adminLogin', [LoginController::class, 'index'])->name('admin.login');
Route::post('adminAuthenticate', [LoginController::class, 'authenticate'])->name('admin.authenticate');
Route::post('adminLogout', [LoginController::class, 'logout'])->name('admin.logout');


Route::middleware(['auth'])->group(function () {
    //Dashboard
    Route::get('adminIndex', [DashboardController::class, 'index'])->name('admin.index');

    //UMKM
    Route::resource('user',UserController::class);
    Route::get('/user/destroy/{user_id}','App\Http\Controllers\UserController@destroy')->name('user.destroy');
    Route::get('/user/resetPassword/{user_id}','App\Http\Controllers\UserController@resetPassword')->name('user.resetPassword');

    //Category
    Route::resource('category',CategoryController::class);
    Route::get('/category/destroy/{category_id}','App\Http\Controllers\CategoryController@destroy')->name('category.destroy');

    //Product
    Route::resource('product',ProductController::class);
    Route::get('/product/destroy/{product_id}','App\Http\Controllers\ProductController@destroy')->name('product.destroy');
    Route::get('/product/editImage/{product_id}','App\Http\Controllers\ProductController@editImage')->name('product.editImage');
    Route::get('/product/deleteImage/{product_image_id}','App\Http\Controllers\ProductController@deleteImage')->name('product.deleteImage');
    Route::post('/storeImage','App\Http\Controllers\ProductController@storeImage')->name('product.storeImage');
});

//Customer
Route::prefix('customer')->group(function () {
    Route::get('/beranda', [FrontEndController::class, 'index'])->name('customer.beranda');
    Route::get('/productList', [FrontEndController::class, 'productList'])->name('customer.productList');
    Route::get('/contactList', [FrontEndController::class, 'contactList'])->name('customer.contactList');
    Route::get('/about', [FrontEndController::class, 'about'])->name('customer.about');
});

