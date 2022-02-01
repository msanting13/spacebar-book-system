<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matrimonial = RoomType::where('type_name', 'Matrimonial')->first();

        $room1 = Room::create([
            'name'  => 'Room 1',
            'description'   => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus soluta sit laborum sed adipisci in error nam excepturi, reiciendis deserunt dolore fugit at possimus ut maxime eveniet aut neque consequuntur.',
            'capacity'  =>  10,
            'room_type_id'  =>  $matrimonial->id,
            'type' => 'room',
            'price'  =>  5000.00,
        ]);

        $room1 = Room::create([
            'name'  => 'Function Hall 1',
            'description'   => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus soluta sit laborum sed adipisci in error nam excepturi, reiciendis deserunt dolore fugit at possimus ut maxime eveniet aut neque consequuntur.',
            'capacity'  =>  10,
            'room_type_id'  =>  $matrimonial->id,
            'type' => 'function hall',
            'price'  =>  5000.00,
        ]);
    }
}
