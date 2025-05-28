<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Telat;
use App\Observers\TelatObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Telat::observe(TelatObserver::class);
    }
}
