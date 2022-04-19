<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\MessageNotification;
use App\Http\Controllers\Controller;
use App\Notifications\CustomerApprovedBookingNotification;

class CustomerBookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function approveBooking($booking_id)
    {
        $booking = Booking::find($booking_id);
        $booking->status = 'approved';
        $booking->save();

        // Save SMS
        MessageNotification::create([
            'phone_number' => $booking->user->phone_number,
            'message' => "Your booking for " . $booking->room->name . " has been approved click this link to download your confirmation letter\nThis message is a system generated. Please do not reply",
        ]);

        $booking->user->notify(new CustomerApprovedBookingNotification($booking));

        return redirect()->back()->with('success', 'You successfully approved ' . $booking->user->fullname . ' booking');
    }
}
