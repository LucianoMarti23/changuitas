<?php



use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;



Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/jobinfo/{id}', [JobController::class, 'showInfo'])->name('jobsInfo');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');


Route::post('/user-publicaciones/{id}', [JobController::class, 'destroy'])->name('jobs.delete');


Route::get('/user-publicaciones/edit/{id}', [JobController::class, 'show'])->name('editPub'); 

Route::post('/notifications/mark-as-read', action: [JobController::class, 'markAsRead'])->name('notifications.markAsRead');



Route::put('/user-publicaciones/edit/{id}', [JobController::class, 'updateJob'])->name('updatePub'); 



Route::post('/jobinfo/apply/{id}', [JobController::class, 'apply'])->name('job.aply');




Route::delete('/jobinfo/apply/{id}', [JobController::class, 'cancelApplication'])->name('job.cancel');

