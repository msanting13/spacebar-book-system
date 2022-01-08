<?php

namespace App\Http\Controllers\User;

use Auth;
use App\Models\User;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\RoomType;
use Illuminate\Http\Request;

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

        return view('user.booking')->with(['rooms' => (isset($rooms)) ? $rooms : null, 'selected_date' => $request->daterange, 'roomTypes' => $roomTypes]);
    }

    public function showBookForm(Request $request, $room_id)
    {
        $room = Room::find($room_id);
        return view('user.book-form', compact('room'))->with(['selected_date' => $request->selected_date]);
    }

    public function book(Request $request, $room_id)
    {
        $user = User::find(Auth::id());
        $room = Room::find($room_id);
        list($start_date, $end_date) = explode(' - ', $request->daterange);

        $user->bookings()->create([
            'room_id'       =>  $room->id,
            'start_date'    =>  date('Y-m-d', strtotime($start_date)),
            'end_date'      =>  date('Y-m-d', strtotime($end_date)),
        ]);

        return redirect()->route('home')->with('success', 'Booked successfully');
    }
}
