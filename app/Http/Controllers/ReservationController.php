<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\reservation as reserv;
use App\Models\reservation;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    $request->validate([
        'event_id' => 'required|exists:events,id',
    ]);

    $user = auth()->user();
    $Event = events::find($request->input('event_id'));
    if ($Event->states == 'auto') {
        $StateofEvent = true;
    }else{
        $StateofEvent = false;

    }

    // 
    $reservation = new reserv();
    $reservation->user_id = $user->id;
    $reservation->event_id = $request->event_id;
    $reservation->accept = $StateofEvent;
    $reservation->save();

    return redirect()->back()->with('success', 'Reservation created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(reserv $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reserv $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reserv $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
    
        return redirect()->back()->with('success', 'Reservation deleted successfully.');
    }

public function userReservations()
    {
        $userId = auth()->user()->id;
        // pluck kat9der takhed beha chno bdebt li rak baghi men table o katreturne array
        $userEvents = Events::where('user_id', $userId)->pluck('id');
        $userReservations = reservation::whereIn('event_id', $userEvents)->get();
        return view('organisateur.allreservation', compact('userReservations'));
    }

public function confirmTicket(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->accept = $request->input('accept');
        $reservation->accept = 1;
        $reservation->save();

        return redirect()->back()->with('success', 'Ticket confirmed successfully.');
    }

public function tickets()
    {
        $userId = auth()->id(); 
        $userReservations = Reservation::where('user_id', $userId)->get();
        return view('user.ticket', compact('userReservations'));
    }


  
}