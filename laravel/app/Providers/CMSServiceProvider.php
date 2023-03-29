<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CMSServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
    require_once app_path() . '/Helpers/CMSKITA.php';
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
