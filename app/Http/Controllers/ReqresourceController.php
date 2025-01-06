<?php

namespace App\Http\Controllers;

use App\Models\reqresource;
use Illuminate\Http\Request;

class ReqresourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reqresources = Reqresource::get();
        return view ('reqresource.index', compact ('reqresources'));
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
    public function show(reqresource $reqresource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reqresource $reqresource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reqresource $reqresource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reqresource $reqresource)
    {
        //
    }
}
