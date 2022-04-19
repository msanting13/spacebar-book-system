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
        if($request->query('from') !== null && $request->query('to') !== null) {
            $from = $request->query('from');
            $to = $request->query('to');    
            $from = Carbon::parse($from);
            $to = Carbon::parse($to);
            
            $bookings = Booking::with(['room', 'room.image', 'extras'])
                                ->whereBetween('end_date', [$from, $to])->where('status', 'check_out')
                                ->get();

            $extrasTotal = 0;
            $total = 0;
            $totalStayedDays = 0;
            
            $bookings->each(function ($booking) use(&$extrasTotal, &$total, &$totalStayedDays) {
                $stayedDays      =  $booking->start_date->diffInDays($booking->end_date) + 1;
                $totalStayedDays += $stayedDays;
                $extrasTotal     += $booking->extras->sum('price');
                $total           += $stayedDays * $booking->room->price + $booking->extras->sum('price');
            });
    
            return view('admin.report.index', compact('bookings', 'extrasTotal', 'total', 'totalStayedDays', 'from', 'to'));
        } else {
            return view('admin.report.index');
        }
    }

    public function print(string $from, string $to)
    {
            $from = Carbon::parse($from);
            $to = Carbon::parse($to);
            
            $bookings = Booking::with(['room', 'room.image', 'extras'])
                                ->whereBetween('end_date', [$from, $to])->where('status', 'check_out')
                                ->get();

            $extrasTotal = 0;
            $total = 0;
            $totalStayedDays = 0;
            $roomTotalAmount = 0;
            $bookings->each(function ($booking) use(&$extrasTotal, &$total, &$totalStayedDays, &$roomTotalAmount) {
                $stayedDays      =  $booking->start_date->diffInDays($booking->end_date) + 1;
                $totalStayedDays += $stayedDays;
                $roomTotalAmount += $booking->room->price;
                $extrasTotal     += $booking->extras->sum('price');
                $total           += $stayedDays * $booking->room->price + $booking->extras->sum('price');
            });
    
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadView('admin.report.print', compact('bookings', 'extrasTotal', 'total', 'totalStayedDays', 'roomTotalAmount', 'from', 'to'));
            return $pdf->stream();
    }
}
