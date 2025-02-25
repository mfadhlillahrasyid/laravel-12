<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::serving(function () {
            Filament::registerTheme(mix('css/filament.css'));

            // Custom Form Components (Opsional)
            Filament::registerFormComponents([
                'text' => TextInput::class,
            ]);

            // Custom Table Columns (Opsional)
            Filament::registerTableColumns([
                'text' => TextColumn::class,
            ]);
        });

        // Definisikan siapa yang bisa mengakses Filament
        Gate::define('access-filament', function (User $user) {
            return $user->hasRole('admin'); // Ganti sesuai role yang diizinkan
        });

        Filament::authGuard('web');
    }
}
