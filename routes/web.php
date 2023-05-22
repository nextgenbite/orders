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

// orders route
Route::post('/order/store',[App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
Route::get('/dashboard',[App\Http\Controllers\OrderController::class, 'index'])->middleware('auth')->name('dashboard');
require __DIR__.'/auth.php';
