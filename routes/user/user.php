<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('register', [UserController::class, 'create'])->name('register');
Route::post('register', [UserController::class, 'store'])->name('register');


// web.php

Route::get('/filter-users', [UserController::class, 'filterUsers'])->name('filter.users');


Route::get('/get-users-html', [UserController::class, 'getUsersHtml'])->name('get.users.html');

