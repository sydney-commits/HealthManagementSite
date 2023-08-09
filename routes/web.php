<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/media-center', function () {
    return view('media_centre');
});

Route::get('/contact', function () {
    return view('contact_us');
});

Route::get('/equipment', function () {
    return view('equipment');
});


Route::post('save-contact', [ContactController::class, 'store'])->name('save_contact');