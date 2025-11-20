<?php

use Illuminate\Support\Facades\Route;

// ===============================================
// CONSTRUCTION PAGE ONLY - TEMPORARY
// ===============================================

// Homepage shows construction page
Route::get('/', function () {
    return view('construction');
})->name('home');

// All other routes redirect to homepage
Route::fallback(function () {
    return redirect('/');
});
