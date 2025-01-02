<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

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
}