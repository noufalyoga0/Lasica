<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\AdminAccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\UserController;
use App\Models\Order;
use App\Http\Controllers\Auth\RegisterController;


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

Route::middleware(['auth:web', 'verified'])->group(function () {

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


/*
|--------------------------------------------------------------------------
| TEST / DEBUG (OPTIONAL)
|--------------------------------------------------------------------------
*/

Route::get('/payment/{order}', [PaymentController::class, 'pay'])
    ->middleware('auth:web')
    ->name('payment.pay');



// test relasi
Route::get('/order-test/{order}', function (Order $order) {
    return $order->load('payment');
});

Route::post('/payment/update', [PaymentController::class, 'updateStatus']);
Route::post('/midtrans/callback', [PaymentController::class, 'callback']);



/*
|--------------------------------------------------------------------------
| AUTH USER
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest:web')
    ->name('login');


Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest:web');
    
    Route::get('/register', function () {
    return view('auth.register');
})->middleware('guest:web')->name('register');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest:web')
    ->name('register');

Route::post('/register', [RegisterController::class, 'store'])
    ->middleware('guest:web');

    
//Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    //->name('logout');
/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    // ======================
    // AUTH ADMIN (PUBLIC)
    // ======================
   Route::get('/login', [AuthController::class, 'loginForm'])
    ->middleware('guest:admin')
    ->name('admin.login');

Route::post('/login', [AuthController::class, 'login'])
    ->middleware('guest:admin');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('admin.logout');

    // ======================
    // ADMIN AREA (PROTECTED)
    // ======================
    Route::middleware('auth:admin')->name('admin.')->group(function () {

        Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/users', [UserController::class, 'index'])
            ->name('users.index');

        Route::get('/payments', [AdminPaymentController::class, 'index'])
            ->name('payments.index');

        Route::get('/payments/{id}', [AdminPaymentController::class, 'show'])
            ->name('payments.show');

        Route::put('/payments/{id}/status', [AdminPaymentController::class, 'updateStatus'])
            ->name('payments.updateStatus');

        Route::get('/orders', [AdminOrderController::class, 'index'])
            ->name('orders.index');

        Route::get('/orders/{id}', [AdminOrderController::class, 'show'])
            ->name('orders.show');

        Route::put('/orders/{id}/status', [AdminOrderController::class, 'updateStatus'])
            ->name('orders.updateStatus');

        Route::get('/trips', [AdminTripController::class, 'index'])
            ->name('trips.index');

        Route::get('/trips/create', [AdminTripController::class, 'create'])
            ->name('trips.create');

        Route::post('/trips', [AdminTripController::class, 'store'])
            ->name('trips.store');

        Route::get('/trips/{trip}/edit', [AdminTripController::class, 'edit'])
            ->name('trips.edit');

        Route::put('/trips/{trip}', [AdminTripController::class, 'update'])
            ->name('trips.update');

        Route::delete('/trips/{trip}', [AdminTripController::class, 'destroy'])
            ->name('trips.destroy');

        
    });
});

Route::get('/debug-auth', function () {
    return [
        'web' => auth()->check(),
        'admin' => auth('admin')->check(),
        'user_id' => auth()->id(),
        'admin_id' => auth('admin')->id(),
    ];
});