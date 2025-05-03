<?php

use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\JobCategoryController;


Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {

    // Users
    Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users');
    Route::get('/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
    Route::post('/users/store', [AdminUserController::class, 'store'])->name('admin.users.store');
    Route::get('/users/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{id}', [AdminUserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');

    // Publicaciones
    Route::get('/publicaciones', [AdminUserController::class, 'indexPublicaciones'])->name('admin.jobs');
    Route::delete('/publicaciones/{id}', [AdminUserController::class, 'destroyPub'])->name('admin.destroyPub');
    Route::get('/search-publications', [AdminUserController::class, 'searchPublications'])->name('admin.searchPublications');

    // Categorías
    Route::get('/category', [JobCategoryController::class, 'index'])->name('admin.category');
    Route::get('/category/create', [JobCategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category/create', [JobCategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/category/edit/{id}', [JobCategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/category/edit/{id}', [JobCategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/category/{id}', [JobCategoryController::class, 'destroy'])->name('admin.category.destroy');
    Route::get('/categories/search', [JobCategoryController::class, 'searchCategories'])->name('admin.category.search');

    // Subscriptions (CRUD)
    Route::resource('subscriptions', SubscriptionController::class)->names([
        'index' => 'admin.subscriptions',
        'create' => 'admin.subscriptions.create',
        'store' => 'admin.subscriptions.store',
        'show' => 'admin.subscriptions.show',
        'edit' => 'admin.subscriptions.edit',
        'update' => 'admin.subscriptions.update',
        'destroy' => 'admin.subscriptions.destroy',
    ]);

    // Vistas administrativas adicionales
    Route::get('/dashboard', [AdminUserController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/posts', [AdminUserController::class, 'index'])->name('admin.posts');
    Route::get('/tests-h', [AdminUserController::class, 'index'])->name('admin.tests-h');
    Route::get('/courses', [AdminUserController::class, 'index'])->name('admin.courses');
    Route::get('/reports', [AdminUserController::class, 'index'])->name('admin.reports');
    Route::get('/support', [AdminUserController::class, 'index'])->name('admin.support');
    Route::get('/settings', [AdminUserController::class, 'index'])->name('admin.settings');
});

