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
        $reqservices->delete();
        if(!$reqservices){
            return redirect()->route('admin.dashboard')
        }
        
        
        return view('admin.dashboard', compact('reqservices'));
    }

    public function resourceDestroy(string $id)
    {
        $reqresources = Reqresource::findorFail($id);
        $reqresources->delete();
        if(!$reqresources){
            return redirect()->route('admin.dashboard')
        }
        return redirect()->route('admin.dashboard', compact('reqresources'));
    }

    
    public function reservationDestroy(string $id)
    {
        $reservations = Reservation::findorFail($id);
        $reservations->delete();
        if(!$reservations){
            return redirect()->route('admin.dashboard')
        }
        return redirect()->route('admin.dashboard', compact('reservations'));
    }

}
