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
        $roomTypes = ['Matrimonial', '2 Single Size Bed', 'Family Room (6 persons)', 'Family Room (8 persons)', 'Family Room (10 persons)', 'Family Room (18 persons)'];

        foreach ($roomTypes as $key => $type) {
            RoomType::create([
                'type_name' =>  $type
            ]);
        }
    }
    
}
