<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Lale: Add to use StringLenght for MariaDB database ver < 10.2
use Illuminate\Support\Facades\Schema;

// Passport
use Laravel\Passport\Passport;

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
        // Lale: Add to use StringLenght for MariaDB database ver < 10.2
        Schema::defaultStringLength(191);

        // Passport. Registra las rutas de Passport.
        Passport::routes();
    }
}
