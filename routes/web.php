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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//change password
Route::get('account/password', [App\Http\Controllers\Account\PasswordController::class, 'edit'])->name('password.edit');
Route::patch('account/password', [App\Http\Controllers\Account\PasswordController::class, 'update'])->name('password.edit');

//siswa and user
Route::resource('/siswas', App\Http\Controllers\SiswaController::class);
Route::get('/dashboard.siswa', [App\Http\Controllers\SiswaController::class, 'dashboard'])->name('siswa');
Route::resource('/users', App\Http\Controllers\UserController::class);

//tu
Route::resource('/tata_usaha', App\Http\Controllers\TataUsahaController::class);


Route::post('/tagihanBuku', [App\Http\Controllers\SiswaController::class, 'tagihanBuku']);
Route::get('/getDatasiswa', [App\Http\Controllers\SiswaController::class, 'getDatasiswa']);
// Payment Controller
Route::resource('/payment', App\Http\Controllers\PaymentController::class);
Route::post('/snaptoken', [App\Http\Controllers\PaymentController::class, 'snap_token']);
Route::post('/statusPayment', [App\Http\Controllers\PaymentController::class, 'statusPayment']);
Route::get('/showPayment/{id}', [App\Http\Controllers\PaymentController::class, 'showPayment']);
