<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProfilePovider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //app:bind('App\Profile::class','App\CreadorDePerfilesHTML::class');
        app:bind('App\Profile','App\CreadorDePerfilesHTML');
    }
}
