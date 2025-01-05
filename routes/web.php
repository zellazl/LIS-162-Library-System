<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReqserviceController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard viewer vs. admin?
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
});

// Request-Services route, user view 
    Route::resource('reqservices', Reqservicecontroller::class);

