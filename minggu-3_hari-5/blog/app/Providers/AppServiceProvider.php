<?php

namespace App\Providers;

use Illuminate\Database\Schema\Builder; // Import Builder where defaultStringLength method is defined

use Illuminate\Support\ServiceProvider;

function boot()
{
    Builder::defaultStringLength(191); // Update defaultStringLength
}

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
