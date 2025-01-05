<?php

namespace App\Http\Controllers;

use App\Models\Reqservice;
use Illuminate\Http\Request;

class ReqserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reqservices = Reqservice::get();
        return view ('reqservice.index', compact ('reqservices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reqservice $reqservice)
    {
        //
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
