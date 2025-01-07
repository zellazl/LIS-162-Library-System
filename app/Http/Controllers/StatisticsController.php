<?php

namespace App\Http\Controllers;

use App\Models\reqresource;
use App\Models\reqservice;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends Controller
{
    public function index()
    {
        // Ensure the user is authenticated and has admin role
        $user = Auth::user();
        // Fetch total counts
        $totalReqResources = reqresource::count();
        $totalReqServices = reqservice::count();
        $totalReservations = Reservation::count();

        // Return the view with totals
        return view('admin.statistics', compact('totalReqResources', 'totalReqServices', 'totalReservations'));
    }
}
