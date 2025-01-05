<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReqserviceController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
});


    Route::resource('reqservices', Reqservicecontroller::class);
    
    


