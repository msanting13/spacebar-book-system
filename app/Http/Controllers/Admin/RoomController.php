<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\RoomType;
use App\Models\RoomImage;
use App\Models\RoomVideo;
use Cloudinary\Tag\VideoTag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Transformation\Format;
use Cloudinary\Transformation\Quality;
use Cloudinary\Transformation\Delivery;

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
            'type' => 'required|in:function hall,room,cottage',
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
            foreach($request->image as $image) {
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path(), $imageName);
                $response = (new UploadApi())->upload(public_path() . '\\' . $imageName);

                RoomImage::create([
                    'room_id' => $room->id,
                    'photo' => $response['url'],
                ]);
            }
        }
        

        if($request->has('video')) {
            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('storage/uploads'), $videoName);
            $response = (new UploadApi())->upload(public_path() . '\\' . $videoName, [
                'overwrite' => true, 
                'resource_type' => 'video'
            ]);

            RoomVideo::updateOrCreate([
                'room_id' => $room->id,
                'url' => $response['url'],
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
            'type' => 'required|in:function hall,room,cottage',
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
            foreach($request->image as $image) {
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path(), $imageName);
                // $response = (new UploadApi())->upload(public_path() . '\\' . $imageName);

                // RoomImage::create([
                //     'room_id' => $room->id,
                //     'photo' => $response['url'],
                // ]);
            }
        }

        if($request->has('video')) {
            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('storage/uploads'), $videoName);
            $response = (new UploadApi())->upload(public_path() . '\\' . $videoName, [
                'overwrite' => true, 
                'resource_type' => 'video'
            ]);

            RoomVideo::updateOrCreate([
                'room_id' => $room->id,
                'url' => $response['url'],
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
