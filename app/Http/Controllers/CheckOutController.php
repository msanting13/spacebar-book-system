<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $bookings = Booking::with(['invoices', 'room', 'extras', 'user'])
                            ->where('status', 'check_out')
                            ->get();

        return view('admin.check-ins-and-out.check-out', compact('bookings'));
    }
}
