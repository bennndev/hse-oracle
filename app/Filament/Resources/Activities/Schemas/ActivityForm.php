<?php

namespace App\Filament\Resources\Activities\Schemas;

use Filament\Schemas\Schema;

class ActivityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            \Filament\Forms\Components\TextInput::make('codigo')
                ->label('Código de Actividad')
                ->required()
                ->unique(ignoreRecord: true)
                ->placeholder('ej. ACT-001'),

            \Filament\Forms\Components\TextInput::make('nombre')
                ->label('Nombre de la Actividad')
                ->required()
                ->placeholder('ej. Charla de 5 minutos'),

            \Filament\Forms\Components\Select::make('frecuencia')
                ->label('Frecuencia de Ejecución')
                ->options([
                    'diario' => 'Diario',
                    'semanal' => 'Semanal',
                    'mensual' => 'Mensual',
                    'anual' => 'Anual',
                ])
                ->required()
                ->native(false),

            \Filament\Forms\Components\Select::make('location_id')
                ->label('Ubicación / Sede')
                ->relationship('location', 'nombre')
                ->required()
                ->searchable()
                ->preload(),
        ]);
    }
}