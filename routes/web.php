<?php

use App\Http\Controllers\TripController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//
// 🌿 Halaman publik
//
Route::get('/', function () {
    return view('dashboard');
})->name('landing');

//
// 🔐 Halaman setelah login
//
Route::middleware(['auth', 'verified'])->group(function () {

    // Home
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // Trip list
    Route::get('/trip', [TripController::class, 'index'])->name('trip');

    // 🟩🟩 INI WAJIB ADA (route detail)
    Route::get('/trip/{id}', [TripController::class, 'detail'])->name('trip.detail');

    // Profil user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
