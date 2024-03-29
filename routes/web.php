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
Route::get('account/reset/{id}', [App\Http\Controllers\Account\PasswordController::class, 'reset'])->name('reset');

//siswa and user
Route::resource('/siswas', App\Http\Controllers\SiswaController::class);
Route::get('/dashboard.siswa', [App\Http\Controllers\SiswaController::class, 'dashboard'])->name('siswa');
Route::resource('/users', App\Http\Controllers\UserController::class);

//tu
// Route::resource('/tata_usaha', App\Http\Controllers\TataUsahaController::class);
Route::get('/tata_usaha', [App\Http\Controllers\TataUsahaController::class, 'index'])->name('tata_usaha.index');
Route::get('/tata_usaha/create', [App\Http\Controllers\TataUsahaController::class, 'create'])->name('tata_usaha.create');
Route::post('/tata_usaha/store', [App\Http\Controllers\TataUsahaController::class, 'store'])->name('tata_usaha.store');
Route::get('/tata_usaha/edit/{id}', [App\Http\Controllers\TataUsahaController::class, 'edit'])->name('tata_usaha.edit');
Route::delete('/tata_usaha/destroy/{id}', [App\Http\Controllers\TataUsahaController::class, 'destroy'])->name('tata_usaha.destroy');

// buku
Route::post('/tagihanBuku', [App\Http\Controllers\SiswaController::class, 'tagihanBuku']);
Route::get('/getDatasiswa', [App\Http\Controllers\SiswaController::class, 'getDatasiswa']);

Route::get('/paymebtBuku', [App\Http\Controllers\SiswaController::class, 'paymebtBuku']);

// Payment Controller
Route::resource('/payment', App\Http\Controllers\PaymentController::class);
Route::post('/snaptoken', [App\Http\Controllers\PaymentController::class, 'snap_token']);
Route::post('/snaptokenBuku', [App\Http\Controllers\PaymentController::class, 'snaptokenBuku']);


Route::post('/statusPayment', [App\Http\Controllers\PaymentController::class, 'statusPayment']);
Route::get('/showPayment/{id}', [App\Http\Controllers\PaymentController::class, 'showPayment']);


// Report
Route::get('/report', [App\Http\Controllers\Report::class, 'index']);
Route::post('/getDataReport', [App\Http\Controllers\Report::class, 'getDataReport']);

Route::get('/test', [App\Http\Controllers\TestController::class, 'index']);
Route::post('/proses', [App\Http\Controllers\TestController::class, 'proses']);
