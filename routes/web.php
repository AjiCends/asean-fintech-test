<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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


Route::prefix('beranda')->name('beranda.')->group(function () {
    Route::get('/',[BerandaController::class,'index'])->name('beranda');
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
