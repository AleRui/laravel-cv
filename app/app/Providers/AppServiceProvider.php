<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Lale: Add to use StringLenght for MariaDB database
use Illuminate\Support\Facades\Schema;

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
        // Lale: Add to use StringLenght for MariaDB database
        Schema::defaultStringLength(191);
    }
}
