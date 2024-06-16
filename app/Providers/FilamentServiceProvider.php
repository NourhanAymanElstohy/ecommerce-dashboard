<?php

namespace App\Providers;

use Filament\Pages\Page;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
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
        Page::register([
            \App\Filament\Pages\CustomDashboard::class,
        ]);
    }
}
