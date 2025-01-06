<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReqserviceController;
use App\Http\Controllers\ReqresourceController;
use App\Http\Controllers\AdminController;

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
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard'); 
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard'); });

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

    // reqservice & resource routes para sa show kineme
    Route::resource('reqservices', Reqservicecontroller::class);
    Route::get('/reqservices/{reqservice}', [ReqserviceController::class, 'show'])->name('reqservices.show');  

    Route::resource('reqresources', Reqresourcecontroller::class);
    Route::get('/reqresources/{reqresource}', [Reqresourcecontroller::class, 'show'])->name('reqresources.show');

    
    


