<?php

namespace App\Http\Controllers;

use App\Models\reqresource;
use App\Models\reqservice;
//use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends Controller
{
    public function index()
    {
        // Ensure the user is authenticated and has admin role
        $user = Auth::user();

        // Fetch data
        $totalReqResources = reqresource::count(); 
        $totalReqServices = reqservice::count();
        //$reservations = Reservation::all();

        // Return the view with data
        return view('admin.statistics', compact('totalReqResources', 'totalReqServices'));
    }
}
