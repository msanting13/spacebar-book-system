<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckInsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        // $currentDate = date('Y-m-d 00:00:00');
        $bookings = Booking::with(['invoices', 'room', 'extras', 'user'])
                            ->where('status', 'approved')
                            ->orWhere('status', 'check_in')
                            ->get();

        return view('admin.check-ins-and-out.check-in', compact('bookings'));
    }
}
