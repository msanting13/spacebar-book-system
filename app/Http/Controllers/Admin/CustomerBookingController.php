<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use App\Notifications\CustomerApprovedBookingNotification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerBookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function approveBooking($booking_id)
    {
        $booking = Booking::find($booking_id);
        $booking->status = 'done';
        $booking->save();

        $booking->user->notify(new CustomerApprovedBookingNotification($booking));

        return redirect()->back()->with('success', 'You successfully approved ' . $booking->user->fullname . ' booking');
    }
}
