<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimoniController;
<<<<<<< HEAD
use App\Http\Controllers\AdminAccountController;
=======
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
>>>>>>> ef0784a (DONE SEMUA, TINGGAL DASHBOARD ADMIN)
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Models\Order;

/*
|--------------------------------------------------------------------------
| HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/', [DashboardController::class, 'index'])->name('landing');

Route::get('/trip', [TripController::class, 'index'])->name('trip');
Route::get('/trip/{id}', [TripController::class, 'detail'])->name('trip.detail');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');
Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');

Route::get('/aboutus', fn () => view('aboutus'))->name('aboutus');

/*
|--------------------------------------------------------------------------
| AUTH / USER
|--------------------------------------------------------------------------
*/

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
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

    // PEMBAYARAN TRIP
    Route::get('/trip/{id}/pay', [TripController::class, 'pay'])->name('trip.pay');

    // ORDER
    Route::post('/order/{trip}', [OrderController::class, 'store'])->name('order.store');
});

/*
|--------------------------------------------------------------------------
| TEST / DEBUG (OPTIONAL)
|--------------------------------------------------------------------------
*/

Route::get('/payment/{order}', [PaymentController::class, 'pay'])
    ->name('payment.pay')
    ->middleware('auth');

// test relasi
Route::get('/order-test/{order}', function (Order $order) {
    return $order->load('payment');

    Route::post('/payment/update', [PaymentController::class, 'updateStatus']);

Route::post('/midtrans/callback', [PaymentController::class, 'callback']);

});  