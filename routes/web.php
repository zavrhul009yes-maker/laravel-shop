<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProducrController;
use App\Http\Controllers\TestControler;
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

Route::get('/', [MainController::class, 'showIndex'])->name('home');

Route::get('/array', [MainController::class, 'showArray'])->name('array');

Route::get('/array/shuffle', [MainController::class, 'shuffleArray'])->name('array.shuffle');
Route::get('/array/sort', [MainController::class, 'sortArray'])->name('array.sort');
Route::get('/array/filter', [MainController::class, 'filterArray'])->name('array.filter');

Route::get('/products', [ProducrController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProducrController::class, 'create'])->name('products.create');
Route::post('/products', [ProducrController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProducrController::class, 'show'])->name('products.show');

Route::get('/products/{product}/edit', [ProducrController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProducrController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProducrController::class, 'destroy'])->name('products.destroy');