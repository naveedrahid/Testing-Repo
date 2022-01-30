<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('product');
Route::get('/products/create', [ProductController::class, 'create'])->name('productcreate');
Route::get('/categories', [CategoryController::class, 'index'])->name('category');

Route::post('/products/store', [ProductController::class, 'store'])->name('addproduct');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('editproduct');
Route::get('/products/update/{id}', [ProductController::class, 'update'])->name('task_update');