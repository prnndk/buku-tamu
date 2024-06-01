<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// auth group
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');

Route::get('/', [\App\Http\Controllers\TamuController::class, 'index']);
Route::post('/tamu', [\App\Http\Controllers\TamuController::class, 'store']);



Route::resource('/dashboard/keperluan-kunjungan', \App\Http\Controllers\KeperluanKunjunganController::class)->middleware('auth')->names('keperluan-kunjungan')->except('show');

Route::group([
    'middleware' => 'auth'
], function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/tamu/{tamu:id}', [\App\Http\Controllers\TamuController::class, 'view'])->name('tamu.view');
    Route::get('/dashboard/tamu/{tamu:id}/edit', [\App\Http\Controllers\TamuController::class, 'edit'])->name('tamu.edit');
    Route::put('/tamu/{id}', [\App\Http\Controllers\TamuController::class, 'update'])->name('tamu.update');
    Route::delete('/tamu/{id}', [\App\Http\Controllers\TamuController::class, 'destroy'])->name('tamu.destroy');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});