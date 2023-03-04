<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ACFServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        add_action('init', function () {
            echo 'This it eh ACC Service provider';
            die;
        });
    }
}
