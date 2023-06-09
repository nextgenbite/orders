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

Route::post('/order/store',[App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
Route::group([ 'middleware'=>'auth'], function(){

    // orders route
    Route::get('/dashboard',[App\Http\Controllers\OrderController::class, 'index'])->middleware('auth')->name('dashboard');
    Route::get('/order/view/{order}',[App\Http\Controllers\OrderController::class, 'show'])->name('order.view');
    Route::delete('/order/delete/{order}',[App\Http\Controllers\OrderController::class, 'destroy'])->name('order.destroy');
});
require __DIR__.'/auth.php';
