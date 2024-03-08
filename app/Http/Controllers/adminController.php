<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.GestUsers', compact('users'));
    }
    public function getAllEvents()
    {
        $events = events::all();
        return view('admin.GestionOfevents', compact('events'));
    }
    public function acceptEvent(Request $request, $eventId)
    {
        $event = events::findOrFail($eventId);
        $event->accept = 1;
        $event->save();
        return redirect()->back()->with('success', 'Event accepted successfully.');
    }
    // forceDelete
    public function destroy(User $user)
    {
        $user->delete(); 
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
    public function restore($id)
    {
        $user = User::withTrashed()->find($id);
    
        if ($user) {
            $user->restore();
            return redirect()->route('users.index')->with('success', 'User restored successfully.');
        } else {
            return redirect()->route('users.index')->with('error', 'User not found.');
        }
    }

}
