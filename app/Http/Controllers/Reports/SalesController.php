<?php

namespace App\Http\Controllers\Reports;

use Carbon\Carbon;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function generate(Request $request)
    {
        if($request->query('daterange') !== null) {
            list($from, $to) = explode('-', $request->query('daterange'));
            $from = Carbon::parse($from);
            $to = Carbon::parse($to);
            $bookings = Booking::with(['room', 'room.image', 'extras'])->whereBetween('start_date', [$from, $to])->where('status', 'done')->get();
            $extrasTotal = 0;
            $total = 0;
            $totalStayedDays = 0;
            
            $bookings->each(function ($booking) use(&$extrasTotal, &$total, &$totalStayedDays) {
                $extrasTotal += $booking->extras->sum('price');
                $stayedDays = $booking->start_date->diffInDays($booking->end_date) == 0 ? 1 : $booking->start_date->diffInDays($booking->end_date);
                $totalStayedDays += $stayedDays;
                $total += $stayedDays * $booking->room->price + $booking->extras->sum('price');
            });
    
            return view('admin.report.index', compact('bookings', 'extrasTotal', 'total', 'totalStayedDays'));
        } else {
            return view('admin.report.index');
        }
    }
}
