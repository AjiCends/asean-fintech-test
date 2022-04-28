<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Middleware\EnsureTokenValid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('product')->name('product.')->group(function () {
    Route::get('/',[ProductController::class,'all'])->name('all');
    Route::get('/paginate',[ProductController::class,'paginate'])->name('paginate');
    Route::get('/order-by/{column}/{ordered}',[ProductController::class,'orderBy'])->name('orderBy');
    Route::get('/with-category',[ProductController::class,'category'])->name('category');
});

Route::prefix('category')->name('category.')->group(function () {
    Route::get('/',[CategoryController::class,'all'])->name('all');
});

Route::prefix('product-detail')->name('product_detail.')->group(function () {
    Route::get('/',[ProductDetailController::class,'all'])->name('all');
});

Route::prefix('private')->middleware(EnsureTokenValid::class)->group(function () {
    Route::prefix('product')->name('poduct.')->group(function () {
        Route::get('/',[ProductController::class,'all'])->name('all');
        Route::get('/paginate',[ProductController::class,'paginate'])->name('paginate');
        Route::get('/order-by/{column}/{ordered}',[ProductController::class,'orderBy'])->name('orderBy');
        Route::get('/with-category',[ProductController::class,'category'])->name('category');
    });
    
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/',[CategoryController::class,'all'])->name('all');
    });
    
    Route::prefix('product-detail')->name('product_detail.')->group(function () {
        Route::get('/',[ProductDetailController::class,'all'])->name('all');
    });
});
