<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Reqservice;
use App\Models\Reqresource;
use App\Models\Reservation;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $user = Auth::user();

        if ($user->role == 'admin') {
            return view('admin.dashboard');
        } elseif ($user->role == 'user') {
            return view('dashboard');
        } 
    }

    public function index()
    {
        $user = Auth::user();
        if ($user->role == 'admin') {
            return view('sorry');
        } elseif ($user->role == 'user') {
            return view('dashboard'); // Return a 404 error for admin users trying to access the dashboard
        }

        abort(403); // Return a 403 Forbidden error for any other roles
    }


    
}