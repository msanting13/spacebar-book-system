<?php

namespace App\Providers;

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
    }
}
