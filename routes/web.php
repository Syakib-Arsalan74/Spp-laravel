<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('home');
});


Route::get('/login', [AuthController::class, 'index'])->name('viewLogin')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

route::resource('/dashboard', DashboardController::class);
Route::resource('/User', AuthController::class)->except(['index', 'store']);
