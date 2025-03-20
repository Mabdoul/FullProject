<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'altPhone' => 'nullable|string|max:15',
            'departure' => 'required|string|max:255',
            'arrival' => 'required|string|max:255',
            'totalSeats' => 'required|integer|min:1',
            'totalPrice' => 'required|numeric|min:0',
        ]);
    
        // Create a new booking
        $booking = Booking::create($validated);
    
        // Return a response
        return response()->json($booking, 201);
    }
}   

