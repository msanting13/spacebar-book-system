<?php

namespace App\Http\Controllers\User;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacilityController extends Controller
{
    public function index()
    {
        $rooms = Room::with(['bookings' => function ($query) {
            $query->where('status', 'pending');
        }])->where('type', '!=', 'room')->get();
        return view('user.facilities', [
            'rooms' => $rooms,
        ]);
    }
}
