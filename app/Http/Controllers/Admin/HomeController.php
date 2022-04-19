<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\User;
use App\Models\Extra;
use App\Models\Booking;
use App\Models\Visitor;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
        
        $users = User::get()->take(2);

        $rooms = Room::where('type', 'room')->count();

        $functionHalls = Room::where('type', 'function hall')->count();

        $feedbacks = Feedback::orderBy('created_at', 'DESC')->get();

        $thisMonth = Booking::whereYear('start_date', date('Y'))
                            ->where('status', 'check_out')
                            ->whereMonth('start_date', date('m'))
                            ->get()
                            ->sum('total_price');

        $lastMonth = Booking::whereYear('start_date', date('Y'))
                                ->where('status', 'check_out')
                                ->whereMonth('start_date', (date('m') - 1))
                                ->get()
                                ->sum('total_price');

        $bookings = Booking::whereDay('start_date', date('d'))
                            ->where('status', 'pending')
                            ->whereYear('start_date', date('Y'))
                            ->whereMonth('start_date', date('m'))
                            ->get();

        $currentDate = date('Y-m-d 00:00:00');
        $advancedTwodays = Carbon::now()->addDays(2)->format('Y-m-d 23:59:59');
        
        $upcomingCheckouts = Booking::with(['extras', 'user', 'room', 'invoices'])
                                        ->where('status', '=', 'check_in')
                                        ->where('end_date', '>=', $currentDate)
                                        ->where('end_date', '<=', $advancedTwodays)
                                        ->get();

        $appliedBookings = Booking::with(['extras', 'user', 'room', 'invoices'])
                                    ->where('status', '=', 'pending')
                                    ->get();

        $extras = Extra::count();

        return view('admin.home', [
            'visitors' => $visitors,
            'users' => $users,
            'extras' => $extras,
            'feedbacks' => $feedbacks,
            'rooms' => $rooms,
            'bookings' => $bookings,
            'upcomingCheckouts' => $upcomingCheckouts,
            'appliedBookings' => $appliedBookings,
            'functionHalls' => $functionHalls,
            'thisMonthSales' => $thisMonth,
            'lastMonthSales' => $lastMonth,
        ]);
    }
}
