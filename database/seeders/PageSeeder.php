<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'title' =>  "Resort's goals and aspirations",
            'index' => 1,
            'content' => 'This mission of Spacebar beach resort is not just to carry out premium quality service to meet the satisfaction of its valued customers.
            <br>
            It is also envisioned to become on of the highly recommended resorts throughout the nation that is as well helping students who are in need of work.'
        ]);

        Page::create([
            'title' =>  "Where you can find us",
            'index' => 2,
            'content' => 'From the terminal located at Barangay Aras-asan public market, this wonderland could be reached on just 15-20 minutes by private vehicle.
            <br>
            If you;re located on places such as Davao, Cagayan, Butuan and such, it is recommended to use Global Positioning System (GPS).'
        ]);

        Page::create([
            'title' =>  "We Offer",
            'index' => 3,
            'content' => '
            Rooms and Cottages at affordable prices:
            <br>
            <br>
            We have budget rooms that could cater 2 persons for 1500 Php. A family room good for 8 persons for 3500 Php, 12 persons for 5000 php and our room for 18 perons would just cost you 7500 php.
            <br>
            <br>

            We also have suite rooms that could cater 4 persons for 5000 php and 10 persons for 7500 php. Last and surely not the least we have rooms located on the second floor of our main build that could conveniently and effectly cater 4 perons for just 5000 php.

            <br>
            <br>

            Cottages are also offered to our day-your guests. We offer cottages to any number of groups- we have available cottages for 2-5 persons that costs 500 php only, a cottage good for 8-10 persons for 800 and the cottage good for 15-20 persons would just be 1000 php.
            '
        ]);

        Page::create([
            'title' =>  "Only at Spacebar",
            'index' => 4,
            'content' => "
                Along the shore of Cagwait White Sand beach, only the Spacebar beach resort offers 24-hour service to their customers and would also serve you food 24/7 sand could contact a masseuse for customer's special
            "
        ]);

        Page::create([
            'title' =>  "Convenience",
            'index' => 5,
            'content' => 'With our pure-hearted service, our customers are expected to enjoy a no-hassle visit on the resort.'
        ]);

        Page::create([
            'title' =>  "Contact Us",
            'index' => 6,
            'content' => 'Spacebar Beach Resort Brgy. Poblacion, Cagwait Surigao del Sur 8304
            <br>
            09063830130
            <br>
            spacebar.pacheco@yahoo.com
            <br>
            <a href="https://web.facebook.com/spacebar10" target="_blank">Spacebar Facebook</a>.'
        ]);
    }
}
