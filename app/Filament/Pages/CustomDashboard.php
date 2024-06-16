<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard;

class CustomDashboard extends Dashboard
{
    protected static ?string $navigationLabel = 'Dashboard';

    protected function getColumns(): int
    {
        return 2;
    }

    protected function getWidgets(): array
    {
        // Return an empty array to hide all widgets, including the Filament card
        return [];
    }

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-home';
    }
}
