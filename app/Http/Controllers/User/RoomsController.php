<?php

namespace App\Http\Controllers\User;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Room::with(['bookings' => function ($query) {
            $query->where('status', 'pending');
        }])->get();
        return view('user.rooms', [
            'rooms' => $rooms,
        ]);
    }
}
