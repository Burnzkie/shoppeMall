<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Now shows your beautiful login form
});

// Or redirect unauthenticated users to login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';