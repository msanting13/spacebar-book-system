<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bookings = Booking::where('user_id', Auth::id())
                            ->get();
                            
        $downPaymentPaid = Booking::PAYMENT_DONE;
        return view('user.home', compact('bookings', 'downPaymentPaid'));
    }
}
