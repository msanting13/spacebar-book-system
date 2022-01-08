<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Christopher',
            'last_name' => 'Vistal',
            'email' => 'admin@yahoo.com',
            'phone_number' => '09193693499',
            'password' => bcrypt('password'),
        ]);
        
        Admin::create([
            'name' => 'Web Administrator',
            'username' => 'admin',
            'email' => 'admin@yahoo.com',
            'password' => bcrypt('password'),
        ]);
    }
}
