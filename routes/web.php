<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

// Updated to return the homepage view
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

// Event route
Route::get('/event', [EventController::class, 'show'])->name('event');

// Other routes
Route::get('/detail/report', function () {
    return view('detail-report');
})->name('detail-report');

Route::get('/create/report', function () {
    return view('report');
})->name('report');

Route::get('/create/event', function () {
    return view('create-event');
})->name('create-event');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
