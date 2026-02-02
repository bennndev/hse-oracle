<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Usuarios', 120)
                ->description('Activos')
                ->color('success'),

            Stat::make('Exámenes', 35)
                ->description('Creados')
                ->color('info'),

            Stat::make('Aprobados', '78%')
                ->description('Promedio')
                ->color('warning'),
        ];
    }
}
