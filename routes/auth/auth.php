<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('auth'); // Agregar nombre 'auth'
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
