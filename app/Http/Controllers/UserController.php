<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;


class UserController extends Controller
{


    public function index()
    {
        // Fetch bookings from the database
        $bookings = Booking::all(); // Assuming you have a Booking model
        // Pass the bookings to the view
        return view('booking', ['bookings' => $bookings]);
    }



    public function store(Request $request)
    {


        // Validate the incoming request data
        $request->validate([
            'hotel' => 'required|string',
            'check_in' => 'required|date|after:today',
            'check_out' => 'required|date|after:check_in',
            'adult' => 'required|integer|min:0',
            'child' => 'required|integer|min:0',
        ]);


        // Create a new booking instance
        $booking = new Booking;
        $booking->hotel = $request->hotel;
        $booking->check_in = $request->check_in;
        $booking->check_out = $request->check_out;
        $booking->adult = $request->adult;
        $booking->child = $request->child;

        $booking->save();
        return back()->withSucess('Product Updated Sucessfully!!');
    }
}
