<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\User;
use App\Models\Extra;
use App\Models\Booking;
use App\Models\Visitor;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $visitors = Visitor::count();
        $users = User::count();
        $rooms = Room::count();
        $feedbacks = Feedback::orderBy('created_at', 'DESC')->get();
        $bookings = Booking::whereDay('start_date', date('d'))
                            ->whereYear('start_date', date('Y'))
                            ->whereMonth('start_date', date('m'))
                            ->get();
        $extras = Extra::count();
        $income = 0;

        return view('admin.home', [
            'visitors' => $visitors,
            'users' => $users,
            'extras' => $extras,
            'feedbacks' => $feedbacks,
            'income' => $income,
            'rooms' => $rooms,
            'bookings' => $bookings,
        ]);
    }
}
