<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PasswordResetController;

// Muestra el formulario para solicitar el enlace de restablecimiento de contraseña
Route::get('password/reset', [PasswordResetController::class, 'showResetForm'])->name('password.request');

// Envía el enlace de restablecimiento de contraseña por correo electrónico
Route::post('password/email', [PasswordResetController::class, 'sendResetLink'])->name('password.email');

// Muestra el formulario para restablecer la contraseña con el token
Route::get('password/reset/{token}', [PasswordResetController::class, 'showResetFormWithToken'])->name('password.reset');

// Restablece la contraseña
Route::post('password/reset', [PasswordResetController::class, 'resetPassword'])->name('password.update');