<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\AdminAccountController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Halaman Publik
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('dashboard');
})->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| Testimoni (PUBLIK)
|--------------------------------------------------------------------------
*/

Route::get('/testimoni', [TestimoniController::class, 'index'])
    ->name('testimoni');
    
Route::get('/testimoni/create', [TestimoniController::class, 'create'])
    ->name('testimoni.create');

Route::post('/testimoni', [TestimoniController::class, 'store'])
    ->name('testimoni.store');

/*
|--------------------------------------------------------------------------
| Halaman Setelah Login
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/trip', [TripController::class, 'index'])->name('trip');
    Route::get('/trip/{id}', [TripController::class, 'detail'])->name('trip.detail');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

    Route::get('/aboutus', function () {
        return view('aboutus');
    })->name('aboutus');

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profil.update');
    });


    Route::get('/dashboard-admin', function () {
        return view('dashboard-admin');
    })->name('dashboard-admin');

    Route::get('/trip-admin', function () {
        return view('trip-admin');
    })->name('trip-admin');

    Route::get('admin-transactions', function () {
        return view('admin-transactions');
    })->name('admin-transactions');

    Route::get('/admin-accounts', [AdminAccountController::class, 'index'])->name('admin-accounts');

    Route::get('/admin-settings', function () {
        return view('admin-settings');
    })->name('admin-settings');

    Route::get('/createtrip-admin', function () {
    return view('/createtrip-admin');
    })->name('createtrip-admin');
});

require __DIR__.'/auth.php';
