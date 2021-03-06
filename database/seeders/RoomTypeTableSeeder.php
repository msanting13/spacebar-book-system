<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roomTypes = [
            'Family Room Good for 4pax',
            'Family Room Good for 6pax',
            'Family Room Good for 12pax',
            'Suite Room Good for 4pax',
            'Family Room Good for 10pax',
            'Family Room Good for 18pax',
            'Family Room Good for 8pax',
            'Matrimonial Room',
            'Twin Bed Room',
            'Umbrella Cottage Good for 10pax',
            'Cubicle Cottage Good for 12-15pax',
            'Modern Cottage Good for 10-15pax',
        ];

        foreach ($roomTypes as $key => $type) {
            RoomType::create([
                'type_name' =>  $type
            ]);
        }
    }
    
}
