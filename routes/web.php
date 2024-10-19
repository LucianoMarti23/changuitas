<?php

use Illuminate\Support\Facades\Route;





use App\Http\Controllers\DonationController;

Route::post('/donate', [DonationController::class, 'donate']);



require base_path('routes/admin/users.php');
require base_path('routes/user/user.php');
require base_path('routes/auth/auth.php');
require base_path('routes/errors/errors.php');
require base_path('routes/profile/profile.php');
require base_path('routes/password/password.php');
require base_path('routes/jobs/jobs.php');



// web.php

Route::get('/', function () {
    return view('welcome');
});

//inicio-registro



//una ves registrado e iniciado secion accede a la vista de crear perfil :)


//vista del sub menu perfil [perfil,habilidade,publicacion, subcripcion,test de habilidad,descarga tu CV,cursos y certificaciones]




Route::get('/subscription', function () {
    return view('profile.subscription');
})->name('profile.subscription');



Route::get('/downloadcv', function () {
    return view('profile.downloadcv');
})->name('profile.downloadcv');

Route::get('/courses', function () {
    return view('profile.courses');
})->name('profile.courses');
//asignar un nombre a una ruta. 
//Esto permite que la ruta sea referenciada fácilmente en otras 
//partes de tu aplicación, como vistas, controladores o middleware, 
//sin necesidad de escribir la URL completa

//Alertas Tecnicas


Route::get('/payment-gateway', function () {
    return view('subcription.payment-gateway');
})->name('subcription.payment-gateway');
Route::get('/alert-sub', function () {
    return view('subcription.alert-sub');
})->name('subcription.alert-sub');


// Ruta subscrip

// routes/web.php



use App\Http\Controllers\WorkExperienceController;

Route::prefix('user/work-experiences')->group(function () {
    Route::get('/', [WorkExperienceController::class, 'index'])->name('work_experiences.index');
    Route::get('/create', [WorkExperienceController::class, 'create'])->name('work_experiences.create');
    Route::post('/', [WorkExperienceController::class, 'store'])->name('work_experiences.store');
    Route::get('/{id}/edit', [WorkExperienceController::class, 'edit'])->name('work_experiences.edit');
    Route::put('/{id}', [WorkExperienceController::class, 'update'])->name('work_experiences.update');
    Route::delete('/{id}', [WorkExperienceController::class, 'destroy'])->name('work_experiences.destroy');
});




























