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

// Payment Controller
Route::resource('/payment', App\Http\Controllers\PaymentController::class);
Route::post('/snaptoken', [App\Http\Controllers\PaymentController::class, 'snap_token']);
Route::post('/statusPayment', [App\Http\Controllers\PaymentController::class, 'statusPayment']);
