<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/crear', App\Http\Livewire\Product\Create::class)->name('products.create')->middleware('admin');

Route::get('/productos/{product}', App\Http\Livewire\Product\Show::class)->name('products.show');

Route::get('/checkout', App\Http\Livewire\Checkout::class)->name('checkout')->middleware('check');