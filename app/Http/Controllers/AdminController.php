<?php

namespace App\Http\Controllers;

use App\Models\Reqservice;
use App\Models\Reqresource;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch all reqservices and reqresources from the database
        $reqservices = Reqservice::all();
        $reservation = Reservation::all();
        //$reqResources = ReqResource::all();

        // Pass the data to the admin view
        //return view('admin.dashboard', compact('reqServices', 'reqResources'));
        return view('admin.dashboard', compact('reqservices', 'reservation'));
    }

    public function destroy(string $id)
    {
        $delRecord = Reservation::findOrFail($id);
        $delRecord->delete();
        
        return redirect()->route('admins.index');
    }
}
