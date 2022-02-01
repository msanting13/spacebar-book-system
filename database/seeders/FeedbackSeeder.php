<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feedback::create([
            'content' => 'In Spacebar, one could laugh while crying at the same time, could live while dying out of stress and most importantly could cool off under the sun.',
            'rating' => '5',
        ]);
    }
}
