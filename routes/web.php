<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembayaranController;

Route::get('/', function () {
    return view('home');
});


Route::get('/login', [AuthController::class, 'index'])->name('viewLogin')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

route::resource('/dashboard', DashboardController::class);
route::resource('/pembayaran', PembayaranController::class);
route::resource('/siswa', SiswaController::class);
route::resource('/spp', SppController::class);
route::resource('/kelas', KelasController::class);
Route::resource('/petugas', AuthController::class);
route::resource('/log-Activity', ActivityController::class);
