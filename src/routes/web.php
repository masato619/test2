<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test2Controller;

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

Route::get('/products', [Test2Controller::class, 'index'])->name('produts.index');
Route::get('/products/create', [Test2Controller::class, 'create'])->name('products.create');
Route::post('/products', [Test2Controller::class, 'store'])->name('products.store');
