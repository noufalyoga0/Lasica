<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;

//
// 🌿 Halaman publik
//
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

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

    // (route detail)
    Route::get('/trip/{id}', [TripController::class, 'detail'])->name('trip.detail');

    // Profil user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Galeri
    Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

    Route::get('/testimoni', [TestimoniController::class, 'index']) ->name('testimoni');

    //Aboutus
    Route::get('/aboutus', function () {
    return view('aboutus');
    })->name('aboutus');


Route::get('/', [TripController::class, 'index'])->name('home');
Route::get('/trip/{id}', [TripController::class, 'detail'])->name('trip.detail');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

});

require __DIR__.'/auth.php';
