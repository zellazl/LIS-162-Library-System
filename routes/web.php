<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReqserviceController;
use App\Http\Controllers\ReqresourceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StatisticsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about_us', function () {
    return view('aboutus');
});

Route::get('/contact_us', function () {
    return view('contactus');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/collection', function () {
    return view('collection');
});

Route::get('/resources', function () {
    return view('resources');
});
//Users
Route::middleware(['auth:sanctum', 'verified'])->group(function () { 
    //Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); 
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard'); });

Route::middleware(['auth:sanctum', 'verified'])->group(function () { 
    Route::get('/admin/statistics', [StatisticsController::class, 'index'])->name('admin.statistics'); 
});

//Login so admin will be redirected sa /admin/dashboard
Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        if ($user->role == 'admin') {
            return redirect('/admin/dashboard');
        }
        // Default for users
        return redirect('/dashboard');
    }
    return back()->withErrors(['email' => 'Invalid credentials.']);
});


//delete
Route::delete('/reqservices/{id}', [AdminController::class, 'serviceDestroy']);
Route::delete('/reqresources/{id}', [AdminController::class, 'resourceDestroy']);
Route::delete('/reservations/{id}', [AdminController::class, 'reservationDestroy']);

// Request-Services route, user view 
    Route::resource('reqservices', ReqserviceController::class);
    Route::resource('reservations', ReservationController::class);
    Route::resource('reqresources', ReqresourceController::class);


