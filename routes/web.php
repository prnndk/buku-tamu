<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// auth group
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/', [\App\Http\Controllers\TamuController::class, 'index']);
Route::post('/tamu', [\App\Http\Controllers\TamuController::class, 'store']);

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/dashboard/tamu/{id}', [\App\Http\Controllers\TamuController::class, 'view'])->name('tamu.view')->middleware('auth');
Route::delete('/tamu/{id}', [\App\Http\Controllers\TamuController::class, 'destroy'])->name('tamu.destroy')->middleware('auth');

Route::resource('/dashboard/keperluan-kunjungan', \App\Http\Controllers\KeperluanKunjunganController::class)->middleware('auth')->names('keperluan-kunjungan')->except('show');
