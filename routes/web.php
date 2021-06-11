<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;
use App\Http\Controller\KMeansController;

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

// Halaman Hanya Untuk Admin
Route::group(['middleware' => ['auth', 'CheckRole:admin']], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/daftar_pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('daftar_pelanggan');
Route::get('/tambah_pelanggan', [App\Http\Controllers\PelangganController::class, 'create'])->name('tambah_pelanggan');
Route::post('/tambah_pelangganStore', [App\Http\Controllers\PelangganController::class, 'store'])->name('tambah_pelangganStore');
Route::get('/admin_editpelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::put('/admin_updatepelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);

Route::get('/daftar_debitAir', [App\Http\Controllers\DebitController::class, 'index']);
Route::get('/admin_tambahDebitAir/{id}',[App\Http\Controllers\DebitController::class, 'admin_tambahDebitAir']);

Route::get('/daftar_debitAirKMeans',[App\Http\Controllers\KMeansController::class, 'index']);
});