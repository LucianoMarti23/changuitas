<?php


use Illuminate\Support\Facades\Route;



Route::get('/401', function () {
    return view('error.401');
});
Route::get('/403', function () {
    return view('error.403');
});
Route::get('/404', function () {
    return view('error.404');
});
Route::get('/419', function () {
    return view('error.419');
});
Route::get('/429', function () {
    return view('error.429');
});
Route::get('/500', function () {
    return view('error.500');
});
Route::get('/503', function () {
    return view('error.503');
});
