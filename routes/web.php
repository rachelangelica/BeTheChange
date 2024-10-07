<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PastEventController;

// Updated to return the homepage view
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

// Event route
Route::get('/event', [EventController::class, 'show'])->name('event');

// Other routes
Route::get('/detail/report', [PastEventController::class, 'show'])->name('detail-report');

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

Route::get('/activity', function () {
    return view('activity');
})->name('activity');

Route::get('/history/activity', function () {
    return view('history-activity');
})->name('history-activity');
