<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Illuminate\Support\Carbon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UsersStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $total24h = User::where('created_at', '>=', Carbon::now()->subDay())->count();

        return [
            Stat::make('Usuários nas últimas 24h', $total24h)
                ->description('Total de usuários criados')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success')
        ];
    }
}
