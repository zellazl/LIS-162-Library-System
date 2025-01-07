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
        $reservations = Reservation::all();

        // Pass the data to the admin view
        return view('admin.dashboard', compact('reqservices', 'reqresources', 'reservations'));
    }
    
     public function serviceDestroy(string $id)
    {
        $reqservices = Reqservice::find($id);
        if(!$reqservices){
            return redirect('/admin/dashboard')->with('error', "Service ID {$id} not found.");
        }
        $reqservices->delete();
        return redirect('/admin/dashboard')->with('success', "Service ID {$id} deleted successfully.");
    }

    public function resourceDestroy(string $id)
    {
        $reqresources = Reqresource::find($id);
        if(!$reqresources){
            return redirect('/admin/dashboard')->with('error', "Resource ID {$id} not found.");
        }
        $reqresources->delete();
        return redirect('/admin/dashboard')->with('success', "Resource ID {$id} deleted successfully.");
    }

    
    public function reservationDestroy(string $id)
    {
        $reservations = Reservation::find($id);
        if(!$reservations){
            return redirect('/admin/dashboard')->with('error', "Reservation ID {$id} not found.");
        }
        $reservations->delete();
        return redirect('/admin/dashboard')->with('success', "Reservation ID {$id} deleted successfully.");
    }

}
