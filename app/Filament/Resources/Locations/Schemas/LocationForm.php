<?php

namespace App\Filament\Resources\Locations\Schemas;

use Filament\Schemas\Schema;

class LocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            \Filament\Forms\Components\TextInput::make('nombre')
                ->label('Nombre de la Sede')
                ->required()
                ->maxLength(100),

            \Filament\Forms\Components\TextInput::make('direccion')
                ->label('Dirección Física')
                ->maxLength(255),

            \Filament\Forms\Components\Toggle::make('activo')
                ->label('¿Sede Activa?')
                ->default(true)
                ->onColor('success'),
        ]);
    }
}