<?php

namespace App\Filament\Resources\Locations\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class LocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nombre')
                ->label('Nombre de la Sede')
                ->required()
                ->maxLength(100),

            TextInput::make('direccion')
                ->label('Dirección Física')
                ->maxLength(255),

            Toggle::make('activo')
                ->label('¿Sede Activa?')
                ->default(true)
                ->onColor('success'),
        ]);
    }
}