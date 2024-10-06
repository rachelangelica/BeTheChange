<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/detail/report', function () {
    return view('detail-report');
})->name('detail-report');

Route::get('/detail/event', function () {
    return view('event');
})->name('event');

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