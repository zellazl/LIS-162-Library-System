<?php

namespace App\Http\Controllers;

use App\Models\Reqservice;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch all reqservices and reqresources from the database
        $reqservices = Reqservice::all();
        $reservations = Reservation::all();
        //$reqResources = ReqResource::all();

        // Pass the data to the admin view
        //return view('admin.dashboard', compact('reqServices', 'reqResources'));
        return view('admin.dashboard', compact('reqservices', 'reservations'));
    }
}
