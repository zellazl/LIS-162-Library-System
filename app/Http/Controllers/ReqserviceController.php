<?php

namespace App\Http\Controllers;

use App\Models\Reqservice;
use Illuminate\Http\Request;

class ReqserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $reqservices = Reqservice::get();

        $userEmail = $request->user()->email;
        
        return view ('reqservice.index', compact ('reqservices', 'userEmail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('reqservice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reqserviceData = [
            'user_fullname' => $request->input('user_fullname'),
            'user_email' => $request->input('user_email'),
            'service_date' => $request->input('service_date'),
            'time_slot' => $request->input('time_slot'),
            'service_name' => $request->input('service_name')
        ];

        $reqservice = Reqservice::create($reqserviceData);
        return redirect()->route('reqservices.show', $reqservice->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reqservice $reqservice)
    {
        $reqservice = Reqservice::findOrFail($reqservice->id);
        return view('reqservice.show', compact('reqservice'));
    }
      

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reqservice $reqservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reqservice $reqservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reqservice $reqservice)
    {
        //
    }
}
