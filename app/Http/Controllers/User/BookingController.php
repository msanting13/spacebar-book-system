<?php

namespace App\Http\Controllers\User;

use App\Models\Room;
use App\Models\User;
use App\Models\Extra;
use App\Models\Booking;
use App\Models\RoomType;
use App\Notifications\InvoiceNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->has('daterange')) {
            list($start_date, $end_date) = explode(' - ', $request->daterange);
            $rooms = Room::whereDoesntHave('bookings', function($query) use ($start_date, $end_date){
                $query->whereDate('start_date', '>=', date('Y-m-d', strtotime($start_date)))->whereDate('end_date', '<=', date('Y-m-d', strtotime($end_date)));
            })->get();
        }
        $roomTypes = RoomType::get();

        return view('user.booking')->with([
            'rooms' => (isset($rooms)) ? $rooms : null,
            'selected_date' => $request->daterange, 'roomTypes' => $roomTypes
        ]);
    }

    public function showBookForm(Request $request, $room_id)
    {
        $room = Room::find($room_id);
        $extras = Extra::get();
        return view('user.book-form', compact('room', 'extras'))
                                ->with(['selected_date' => $request->selected_date]);
    }

    public function book(Request $request, $room_id)
    {
        $user = User::find(Auth::id());
        $room = Room::find($room_id);

        list($start_date, $end_date) = explode(' - ', $request->daterange);
        $startDate = Carbon::parse($start_date);
        $endDate = Carbon::parse($end_date);
        $daysToStay = $startDate->diffInDays($endDate) + 1;
        $pricePerDay = $room->price;  
        $extras = Extra::find($request->extras);
        $totalPricePerDay = $pricePerDay * $daysToStay;
        if (is_null($extras)) {
            $totalPrice = $totalPricePerDay;
        } else {
            $totalAmmountOfExtras = $extras->sum('price');
            $totalPrice = $pricePerDay * $daysToStay + $totalAmmountOfExtras;
        }

        $booking = $user->bookings()->create([
            'room_id'    => $room->id,
            'status'     => 'pending',
            'start_date' => date('Y-m-d', strtotime($start_date)),
            'end_date'   => date('Y-m-d', strtotime($end_date)),
            'total_price' => $totalPrice,
        ]);

        $booking->extras()->attach($request->extras);

        $invoice = $booking->invoices()->create([
            'amount'    =>  $totalPrice,
            'user_id'   =>  $user->id,
        ]);
        
        $invoiceDetails = [
            'customer_name'         =>  $user->full_name,
            'room'                  =>  $room->name, //room can be function hall or cottage
            'room_description'      =>  $room->description,
            'invoice_number'        =>  $invoice->invoice_number,
            'price'                 =>  number_format($room->price, 2, '.', ','),
            'booking_date'          =>  $request->daterange,
            'days_to_stay'          =>  $daysToStay,
            'extras'                =>  $extras,
            'total_price_per_day'   =>  number_format($totalPricePerDay, 2, '.', ','),
            'total'                 =>  number_format($totalPrice, 2, '.', ',')
        ];

        // $user->notify(new InvoiceNotification($invoiceDetails));

        return redirect()->route('home')->with('success', 'Booked successfully');
    }
}
