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
Route::get('/daftar_pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('daftar_pelanggan');
Route::get('/tambah_pelanggan', [App\Http\Controllers\PelangganController::class, 'create'])->name('tambah_pelanggan');
Route::post('/tambah_pelangganStore', [App\Http\Controllers\PelangganController::class, 'store'])->name('tambah_pelangganStore');
