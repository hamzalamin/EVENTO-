<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\categories;
use App\Models\reservation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = categories::all();
        return view('organisateur.AddEvent', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // Retrieve all categories from the database
    // $categories = categories::all();
    // return view('organisateur.AddEvent', compact('categories'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $organizerId = auth()->user()->id;
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'places_available' => 'required|integer|min:1',
            'states' => 'required',

        ]);

        events::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location,
            'category_id' => $request->category_id,
            'user_id' => $organizerId,
            'places_available' => $request->places_available,
            'states' => $request->states,
            ]);
    
    
        return redirect()->route('organizer.events')->with('success', 'Event created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(events $events ,$id)
    {
        //
        $event = events::findOrFail($id);
        $categories = categories::all();
        return view('organisateur.updateEvent', compact('event', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $event = events::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'places_available' => 'required|integer|min:1',
        ]);
    
        $event->update($request->all());
    
        return redirect()->route('organizer.events')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
         
        $event = events::find("$id");
       
        $event->delete();
        return redirect()->back()->with('success', 'Event deleted successfully.');
    }

    public function organizerEvents()
        {
            $organizerId = auth()->user()->id;
            $events = events::where('user_id', $organizerId)->get();
            return view('organisateur.EventOfOrganisatuer', compact('events'));
        }

public function events(Request $request, events $event, reservation $reservation)
    {
        // dd($reservation);
        // $eventId = $reservation->id;
        // // dd($eventId);
        // $reservationsCount = reservation::where('event_id', $eventId)->count();
        // // dd($reservationsCount);

        // if ($reservationsCount >= $event->places_available) {
        //     $message = 'Seats are full for this event.';

        // } else {
        //     $availableSeats = $event->places_available - $reservationsCount;
        //     $message = 'Available seats: ' . $availableSeats;
        // }
        $message ='';
        $events = events::all();
        $categories = categories::all(); 
        return view('HomePage', compact('events', 'categories', 'message'));
    }


public function search(Request $request)
    {
        $title = $request->input('title');
        $categoryId = $request->input('category_id');
        $query = events::query();

        if ($title) {
            $query->where('title', 'like', '%'.$title.'%');
        }
        if ($categoryId) {
            $categoryId = (int)$categoryId;
            $query->orwhere('category_id', $categoryId);
        }else{
            $query->get();
        }
        
        $message = '';
        $categories = categories::all();

        $events = $query->get();
        return view('HomePage', compact('events','categories', 'message'));
    }



}
