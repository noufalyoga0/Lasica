<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//
// 🌿 Halaman publik (belum login)
//
Route::get('/', function () {
    return view('dashboard'); // landing page publik
})->name('landing');

//
// 🔐 Halaman setelah login
//
Route::middleware(['auth', 'verified'])->group(function () {

    // Home setelah login
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // Trip hanya untuk user login
    Route::get('/trip', function () {
        return view('trip');
    })->name('trip');

    // Profil user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
