<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/all-products', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

Route::get('/all-suppliers', [SupplierController::class, 'index'])->name('supplier.index');
Route::get('/supplier/{id}', [SupplierController::class, 'show'])->name('supplier.show');

Route::get('/all-employees', function () {
  return view('employee');
})->name('employee.index');
Route::get('/employee/{id}', function () {
  return view('detail_employee');
})->name('employee.show');

Route::get('/all-customers', function () {
  return view('customer');
})->name('customer.index');
Route::get('/customer/{id}', function () {
  return view('detail_customer');
})->name('customer.show');