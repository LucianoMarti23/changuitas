<?php


use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

// Rutas del perfil de usuario
Route::get('/createprofile', [UserProfileController::class, 'create'])->name('profile.create');
Route::post('/profile/store', [UserProfileController::class, 'store'])->name('profile.store');
Route::get('/personalData/{id}', [UserProfileController::class, 'show'])->name('profile.personalData');
Route::put('/personalData/edit/{id}', [UserProfileController::class, 'update'])->name('personalData.edit');

Route::post('/upload-picture', [UserProfileController::class, 'uploadProfilePicture'])->name('profile.uploadPicture');
Route::delete('/profile/delete-picture', [UserProfileController::class, 'deleteProfilePicture'])->name('profile.deletePicture');

Route::get('/profiles', [UserProfileController::class , 'showProfiles'])->name('profile.profiles');
   
Route::get('/profile/details/{id}' , [UserProfileController::class , 'showProfileDetail'])->name('profile.profiledetails');


Route::post('/user-profile/update-summary/{profileId}', [UserProfileController::class, 'updateSummary'])
    ->name('user-profile.update-summary');


Route::post('/user-profile/update-education/{profileId}', [UserProfileController::class, 'updateEducation'])
    ->name('user-profile.update-education');

Route::post('/user-profile/update-skills/{profileId}', [UserProfileController::class, 'updateSkills'])
    ->name('user-profile.update-skills');

Route::get('/user-publicaciones', [UserProfileController::class, 'showAll'])->name('profile.publicaciones');




    Route::get('/postulantes/{id}', [UserProfileController::class, 'showPostulants'])->name('postulantes.index');
    


    Route::get('/notificaciones', [UserProfileController::class, 'showNotifications'])->name('notificaciones.index');