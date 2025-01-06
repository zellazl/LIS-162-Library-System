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
        return view ('reqresource.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reqresourceData = [
            'user_fullname' => $request->input('user_fullname'),
            'user_email' => $request->input('user_email'),
            'claim_date' => $request->input('claim_date'),
            'resource_title' => $request->input('resource_title'),
            'resource_author' => $request->input('resource_author'),
            'resource_accession_number' => $request->input('resource_accession_number')
        ];

        Reqresource::create($reqresourceData);
        return redirect()->route('reqresources.index');

        $reqresource = Reqresource::create($reqsourceData);
        return redirect()->route('reqresources.show', $reqresource->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(reqresource $reqresource)
    {
        $reqresource = Reqresource::findOrFail($reqresource->id);
        return view('reqresources.show', compact('reqresource'));
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
