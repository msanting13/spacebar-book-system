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
        $rooms = [
            [
                'name' =>' RM-01',
            'room_type_id' => RoomType::where('type_name', 'Family Room Good for 4pax')->first()->id,
            'description' => ' Fully air conditioned, 2 Double Sized Bed, With Table, With own CR (Hot and Cold)',
            'price' => ' 4,500',
            ],
            [
                'name' =>' RM-02',
            'room_type_id' => RoomType::where('type_name', 'Family Room Good for 6pax')->first()->id,
            'description' => ' Fully air conditioned, 3 Double Sized Bed, With Table, With own CR (Hot and Cold)',
            'price' => ' 6,000',
            ],
            [
                'name' =>' RM-03',
            'room_type_id' => RoomType::where('type_name', 'Family Room Good for 6pax')->first()->id,
            'description' => ' Fully air conditioned, 3 Double Sized Bed, With Table, With own CR (Hot and Cold)',
            'price' => ' 6,000',
            ],
            [
                'name' =>' RM-04',
            'room_type_id' => RoomType::where('type_name', 'Family Room Good for 12pax')->first()->id,
            'description' => ' Fully air conditioned, 6 Double Sized Bed, With Table, With own CR (Hot and Cold)',
            'price' => ' 8,000',
            ],
            [
                'name' => 'RM-05 ',
            'room_type_id' => RoomType::where('type_name', 'Suite Room Good for 4pax')->first()->id,
            'description' => ' Fully air conditioned, 2 Double Sized Bed, With Table, With own CR (Hot and Cold), Free Pool Pass, Free Breakfast, Located at 2nd floor at Beach Front',
            'price' => ' 5,000',
            ],
            [
                'name' =>' RM-06',
            'room_type_id' => RoomType::where('type_name', 'Suite Room Good for 4pax')->first()->id,
            'description' => ' Fully air conditioned, 2 Double Sized Bed, With Table, With own CR (Hot and Cold), Free Pool Pass, Free Breakfast, Located at 2nd floor at Beach Front',
            'price' => ' 5,000',
            ],
            [
                'name' =>' RM-07',
            'room_type_id' => RoomType::where('type_name', 'Suite Room Good for 4pax')->first()->id,
            'description' => ' Fully air conditioned, 2 Double Sized Bed, With Table, With own CR (Hot and Cold), Free Pool Pass, Free Breakfast, Located at 2nd floor at Beach Front',
            'price' => ' 5,000',
            ],
            [
                'name' =>' RM-08',
            'room_type_id' => RoomType::where('type_name', 'Suite Room Good for 4pax')->first()->id,
            'description' => ' Fully air conditioned, 2 Double Sized Bed, With Table, With own CR (Hot and Cold), Free Pool Pass, Free Breakfast, Located at 2nd floor at Beach Front',
            'price' => ' 5,000',
            ],
            [
                'name' =>' RM-09',
            'room_type_id' => RoomType::where('type_name', 'Suite Room Good for 4pax')->first()->id,
            'description' => ' Fully air conditioned, 2 Double Sized Bed, With Table, With own CR (Hot and Cold), Free Pool Pass, Free Breakfast, Located at 2nd floor at Beach Front',
            'price' => ' 5,000',
            ],
            [
                'name' =>' RM-10',
            'room_type_id' => RoomType::where('type_name', 'Suite Room Good for 4pax')->first()->id,
            'description' => ' Fully air conditioned, 2 Double Sized Bed, With Table, With own CR (Hot and Cold), Free Pool Pass, Free Breakfast, Located at 2nd floor at Beach Front',
            'price' => ' 5,000',
            ],
            
            [
                'name' =>' RM-13',
            'room_type_id' => RoomType::where('type_name', 'Family Room Good for 10pax')->first()->id,
            'description' => 'Fully air conditioned, 5 Double Sized Bed, With Table, With own CR (Hot and Cold), Located Near the pool',
            'price' => ' 6,500',
            ],
            [
                'name' =>' RM-15',
            'room_type_id' => RoomType::where('type_name', 'Family Room Good for 18pax')->first()->id,
            'description' => ' Fully air conditioned, 9 Double Sized Bed, With Table, With own CR (Hot and Cold), Located at the backside of the resort',
            'price' => ' 7,500',
            ],
            [
                'name' =>' RM-16',
            'room_type_id' => RoomType::where('type_name', 'Family Room Good for 8pax')->first()->id,
            'description' => ' Fully air conditioned, 4 Double Sized Bed, With Table, With own CR (Hot and Cold), Located at the backside of the resort',
            'price' => ' 3,500',
            ],
            [
                'name' =>' RM-17',
            'room_type_id' => RoomType::where('type_name', 'Family Room Good for 12pax')->first()->id,
            'description' => ' Fully air conditioned, 6 Double Sized Bed, With Table, With own CR (Hot and Cold), Located at the backside of the resort',
            'price' => '5,000',
            ],
            [
                'name' =>' RM-18',
            'room_type_id' => RoomType::where('type_name', 'Matrimonial Room')->first()->id,
            'description' => ' Fully air conditioned, 1 Double Sized Bed, With Table, With own CR (Hot and Cold), Located at the backside of the resort',
            'price' => ' 1,500',
            ],
            [
                'name' =>' RM-19',
            'room_type_id' => RoomType::where('type_name', 'Twin Bed Room')->first()->id,
            'description' => ' Fully air conditioned, 1 Double Sized Bed, With Table, With own CR (Hot and Cold), Located at the backside of the resort',
            'price' => ' 1,500',
            ],
            [
                'name' =>' RM-20',
            'room_type_id' => RoomType::where('type_name', 'Matrimonial Room')->first()->id,
            'description' => ' Fully air conditioned, 1 Double Sized Bed, With Table, With own CR (Hot and Cold), Located at the backside of the resort',
            'price' => ' 1,500',
            ],
            [
                'name' =>' RM-21',
            'room_type_id' => RoomType::where('type_name', 'Twin Bed Room')->first()->id,
            'description' => ' Fully air conditioned, 1 Double Sized Bed, With Table, With own CR (Hot and Cold), Located at the backside of the resort',
            'price' => ' 1,500',
            ],
            [
                'name' =>' RM-22',
            'room_type_id' => RoomType::where('type_name', 'Matrimonial Room')->first()->id,
            'description' => ' Fully air conditioned, 1 Double Sized Bed, With Table, With own CR (Hot and Cold), Located at the backside of the resort',
            'price' => ' 1,500',
            ],
            [
                'name' =>' RM-23',
            'room_type_id' => RoomType::where('type_name', 'Twin Bed Room')->first()->id,
            'description' => ' Fully air conditioned, 1 Double Sized Bed, With Table, With own CR (Hot and Cold), Located at the backside of the resort',
            'price' => ' 1,500',
            ],
            [
                'name' =>' RM-24',
            'room_type_id' => RoomType::where('type_name', 'Matrimonial Room')->first()->id,
            'description' => ' Fully air conditioned, 1 Double Sized Bed, With Table, With own CR (Hot and Cold), Located at the backside of the resort',
            'price' => ' 1,500',
            ],
            [
                'name' =>' RM-25',
                'room_type_id' => RoomType::where('type_name', 'Twin Bed Room')->first()->id,
                'description' => ' Fully air conditioned, 1 Double Sized Bed, With Table, With own CR (Hot and Cold), Located at the backside of the resort',
                'price' => ' 1,500',
            ],
        ];

        foreach($rooms as $room) {
            Room::create([
                'name'  => ltrim($room['name']),
                'description' => ltrim($room['description']),
                'capacity'  =>  10,
                'room_type_id'  =>  $room['room_type_id'],
                'type' => 'room',
                'price'  =>  trim(str_replace(',', '', $room['price'])),
            ]);
        }
    }
}
