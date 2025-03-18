<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validation (optional)
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'alt_phone' => 'nullable|string|max:20',
            'total_seats' => 'required|integer',
            'total_price' => 'required|numeric',
            'departure' => 'required|string|max:255',
            'arrival' => 'required|string|max:255',
            
        ]);

        // Create the booking
        $booking = Booking::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'alt_phone' => $request->alt_phone,
            'total_seats' => $request->total_seats,
            'total_price' => $request->total_price,
            'departure' => $request->departure,
            'arrival' => $request->arrival,
        ]);

        return response()->json([
            'message' => 'Booking successfully created!',
            'data' => $booking
        ], 200);
    }
}
