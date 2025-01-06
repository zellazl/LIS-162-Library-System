<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class reservationController extends Controller
{
    
    public function storeMultiple(Request $request)
{
    $reservations = $request->reservations;  

    foreach ($reservations as $reservationData) {
        $reservation = new Reservation();
        $reservation->reservation_date = $reservationData['reservation_date'];
        $reservation->facility = $reservationData['facility'];
        $reservation->from = $reservationData['from'];
        $reservation->until = $reservationData['until'];
        $reservation->user_id = $reservationData['user_id'];  
        $reservation->save();
    }

    return redirect()->route('reservations.index');
}
    public function index(Request $request)
    {
        $reservations = Reservation::get();

        $userEmail = $request->user()->email;
    
        return view('reservation.index', compact('reservations', 'userEmail'));
    }
   
    public function create()
    {
        return view('reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $reservationData = [
            'reservation_date' =>$request->input('date'),
            'facility' =>$request->input('facility'),
            'from' =>$request->input('from'),
            'until' =>$request->input('until'),
        ];

        Reservation::create($reservationData);

        return redirect()->route('reservations.index');
    }

    public function show(Reservation $reservation)
    {
        return view('reservation.submission', compact('reservation'));
    }

    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
