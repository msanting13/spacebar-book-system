<?php

namespace App\Providers;

use App\Models\Booking;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Cloudinary\Configuration\Configuration;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Configuration::instance([
            'cloud' => [
              'cloud_name' => 'dyjj97kgw', 
              'api_key' => '449953764969235', 
              'api_secret' => 'Sb_5CmpgQ9sg3K-RexrcQWlBqEw'],
        ]);

        View::composer('admin.layouts.app', function ($view) {
            $noOfCheckIns = Booking::where('status', 'check_in')->orWhere('status', 'approved')->count();
            $noOfCheckOuts = Booking::where('status', 'check_out')->count();
            $view->with('no_of_check_ins', $noOfCheckIns);
            $view->with('no_of_check_outs', $noOfCheckOuts);
        });
    }
}
