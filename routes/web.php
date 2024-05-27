<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\TamuController::class, 'index']);
Route::post('/tamu', [\App\Http\Controllers\TamuController::class, 'store']);
Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
