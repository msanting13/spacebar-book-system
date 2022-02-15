<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\RoomType;
use App\Models\RoomImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $rooms = Room::get();
        return view('admin.room.index', compact('rooms'));
    }

    public function create()
    {
        $types = RoomType::get();
        return view('admin.room.create', compact('types'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required',
            'description' => 'required',
            'capacity'    => 'required|integer',
            'classification'   => 'required|exists:room_types,id',
            'type' => 'required|in:function hall,room',
            'price'  => 'required|integer',
        ]);

        $room = Room::create([
            'name' => $request->name,
            'description' => $request->description,
            'capacity' => $request->capacity,
            'room_type_id' => $request->classification,
            'type' => $request->type,
            'price' => $request->price,
            'type' => $request->type,
        ]);

        if($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/uploads'), $imageName);

            RoomImage::create([
                'photo' => $imageName,
                'room_id' => $room->id,
            ]);
        }


        return back()->with('success', 'You have successfully create new room');
    }

    public function edit($id)
    {
        $room = Room::find($id);
        $types = RoomType::get();
        return view('admin.room.edit', compact('room', 'types'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'        => 'required',
            'description' => 'required',
            'capacity'    => 'required|integer',
            'classification'   => 'required|exists:room_types,id',
            'type' => 'required|in:function hall,room',
            'price'  => 'required',
        ]);
    
        $room = Room::find($id);
    
        $room->name = $request->name;
        $room->description = $request->description;
        $room->capacity = $request->capacity;
        $room->room_type_id = $request->classification;
        $room->type = $request->type;
        $room->price = $request->price;
        $room->save();

        
        if($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/uploads'), $imageName);

            $roomImage = RoomImage::updateOrCreate([
                'room_id' => $room->id,
                'photo' => $imageName,
            ]);
        }

        return back()->with('success', 'You have successfully update a room');
    }
    
    public function delete(string $id)
    {
        Room::find($id)->delete();
        return back()->with('success', 'You have successfully delete a room');
    }
}
