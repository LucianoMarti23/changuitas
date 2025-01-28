<?php



use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
});




Route::get('/jobinfo/{id}', [JobController::class, 'showInfo'])->name('jobsInfo');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/filter', [JobController::class, 'filterByCategory'])->name('jobs.filterByCategory');

Route::post('/user-publicaciones/{id}', [JobController::class, 'destroy'])->name('jobs.delete');


Route::get('/user-publicaciones/edit/{id}', [JobController::class, 'show'])->name('editPub'); 

Route::post('/notifications/mark-as-read', action: [JobController::class, 'markAsRead'])->name('notifications.markAsRead');

Route::post('/notifications/mark-as-read-message', action: [JobController::class, 'markAsReadMessage'])->name('notifications.markAsReadMessage');


Route::put('/user-publicaciones/edit/{id}', [JobController::class, 'updateJob'])->name('updatePub'); 



Route::post('/jobinfo/apply/{id}', [JobController::class, 'apply'])->name('job.aply');




Route::delete('/jobinfo/apply/{id}', [JobController::class, 'cancelApplication'])->name('job.cancel');

