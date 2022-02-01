<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            RoomTypeTableSeeder::class,
            RoomTableSeeder::class,
            PageSeeder::class,
            FeedbackSeeder::class,
        ]);
    }
}
