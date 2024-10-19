<?php

use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\JobCategoryController;

Route::post('/users/store', [AdminUserController::class, 'store'])->name('login.users.store');


Route::get('/admin/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
Route::delete('admin/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');



Route::get('admin/users', [AdminUserController::class, 'index'])->name('admin.users');

Route::get('admin/posts', [AdminUserController::class, 'index'])->name('admin.posts');


Route::prefix('admin')->group(function () {
    Route::resource('subscriptions', SubscriptionController::class)->names(['index' => 'admin.subscriptions']);
    // web.php


});
Route::get('/paid-service', [SubscriptionController::class, 'indexUser']);

Route::get('admin/category', [JobCategoryController::class, 'index'])->name('admin.category');

Route::get('admin/category/create', [JobCategoryController::class, 'create'])->name('admin.category.create');

Route::get('admin/category/edit/{id}', [JobCategoryController::class, 'edit'])->name('admin.category.edit');


Route::put('admin/category/edit/{id}', [JobCategoryController::class, 'update'])->name('admin.category.update');



Route::post('admin/category/create', [JobCategoryController::class, 'store'])->name('admin.category.store');


Route::delete('admin/category/{id}', [JobCategoryController::class, 'destroy'])->name('admin.category.destroy');


Route::get('/admin/categories/search', [JobCategoryController::class, 'searchCategories'])->name('admin.category.search');


Route::get('admin/tests-h', [AdminUserController::class, 'index'])->name('admin.tests-h');
Route::get('admin/courses', [AdminUserController::class, 'index'])->name('admin.courses');
Route::get('admin/reports', [AdminUserController::class, 'index'])->name('admin.reports');
Route::get('admin/support', [AdminUserController::class, 'index'])->name('admin.support');
Route::get('admin/settings', [AdminUserController::class, 'index'])->name('admin.settings');
Route::get('admin/dashboard', [AdminUserController::class, 'dashboard'])->name('admin.dashboard');
// web.php
Route::post('admin/users/store', [AdminUserController::class, 'store'])->name('users.store');
Route::put('/users/{id}', [AdminUserController::class, 'update'])->name('users.update');




Route::get('/admin/users/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');

Route::prefix('admin')->group(function () {
    Route::get('users/index', [AdminUserController::class, 'index'])->name('users.index');
    
    Route::get('users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
    Route::get('users/store', [AdminUserController::class, 'store'])->name('admin.users.store');
});


Route::get('/admin/publicaciones', [AdminUserController::class, 'indexPublicaciones'])->name('admin.jobs');
Route::delete('/admin/publicaciones/{id}', [AdminUserController::class, 'destroyPub'])->name('admin.destroyPub');


// Rutas en web.php
Route::get('/admin/search-publications', [AdminUserController::class, 'searchPublications'])->name('admin.searchPublications');
