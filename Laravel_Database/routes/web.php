<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::controller(ProductsController::class)->group(function () {
    Route::get('/master-data/products', 'index')->name('m_products');
    Route::post('/master-data/products', 'store');
    Route::get('/master-data/products/{id}', 'show')->name('m_products_detail');
    Route::get('/master-data/products/edit/{id}', 'edit')->name('m_products_edit');
    Route::get('/master-data/products/remove/{id}', 'destroy')->name('m_products_remove');
});