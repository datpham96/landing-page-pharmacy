<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyAppConfigProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('Home', function ($app) {
            return new \App\Libs\Config\Home();
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        return [
            'Home'
        ];
    }
}
