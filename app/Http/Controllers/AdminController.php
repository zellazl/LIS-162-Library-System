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
        $reqresources = Reqresource::all();

        // Pass the data to the admin view
        return view('admin.dashboard', compact('reqservices', 'reqresources'));
    }
}
