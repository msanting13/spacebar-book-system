<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $roomTypes = RoomType::orderBy('created_at', 'DESC')->get();
        return view('admin.room-types.index', compact('roomTypes'));
    }

    public function create()
    {
        return view('admin.room-types.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|max:200',
        ]);

        RoomType::create([
            'type_name' => $request->description,
        ]);

        return back()->with('success', 'You have successfully add new room type');
    }

    public function edit(RoomType $type)
    {
        return view('admin.room-types.edit', compact('type'));
    }
}
