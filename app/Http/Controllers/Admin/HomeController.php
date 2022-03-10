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
        $users = User::get()->take(10);
        $rooms = Room::where('type', 'room')->count();
        $functionHalls = Room::where('type', 'function hall')->count();
        $feedbacks = Feedback::orderBy('created_at', 'DESC')->get();

        $bookings = Booking::whereDay('start_date', date('d'))
                            ->whereYear('start_date', date('Y'))
                            ->whereMonth('start_date', date('m'))
                            ->get();

        $appliedBookings = Booking::with(['extras'])->get() ?? [];

        $extras = Extra::count();
        $income = 0;

        Booking::with(['extras', 'room'])->where('status', 'done')->get()->each(function ($record) use(&$income) {
            $basePrice = $record->room->price;
            $daysToStay = $record->end_date->diffInDays($record->start_date) + 1;
            $priceToPay = ($basePrice * $daysToStay) + $record->extras->sum('price');
            $income += $priceToPay;
        });

        return view('admin.home', [
            'visitors' => $visitors,
            'users' => $users,
            'extras' => $extras,
            'feedbacks' => $feedbacks,
            'income' => $income,
            'rooms' => $rooms,
            'bookings' => $bookings,
            'appliedBookings' => $appliedBookings,
            'functionHalls' => $functionHalls,
        ]);
    }
}
