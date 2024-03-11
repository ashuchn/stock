<?php

use Illuminate\Support\Facades\Route;

/**
 * Common routes
 */

Route::get('/', function () {
    return view('welcome');
});

// Route::get('login', [])

Auth::routes([
    'verify'=>true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
