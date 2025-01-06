<?php

namespace App\Http\Controllers;

use App\Models\Reqservice;
use App\Models\Reqresource;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch all reqservices and reqresources from the database
        $reqservices = Reqservice::all();
        $reqresources = Reqresource::all();
        $reservation = Reservation::all();

        // Pass the data to the admin view
        return view('admin.dashboard', compact('reqservices', 'reqresources', 'reservation'));
    }
    
     public function destroy(string $id)
    {
        $reqservice = Reqservice::find($id);
    if ($reqservice) {
        $reqservice->delete();
    }

    $reqresource = Reqresource::find($id);
    if ($reqresource) {
        $reqresource->delete();
    }

    $reservation = Reservation::find($id);
    if ($reservation) {
        $reservation->delete();
    }   
        return redirect()->route('admin.dashboard', compact('reqservices', 'reqresources', 'reservation'));
    }
}
