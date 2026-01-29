<?php

namespace App\Filament\Resources\ElementTypes\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;

class ElementTypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nombre')
                ->label('Nombre del Tipo')
                ->required()
                ->maxLength(50),

            Textarea::make('descripcion')
                ->label('Descripción Opcional')
                ->rows(3),

            Select::make('training_id')
                ->label('Capacitación Asociada (Opcional)')
                // CAMBIA 'nombre' por la columna real de tu tabla trainings (ej: 'titulo' o 'tema')
                ->relationship('training', 'titulo') 
                ->searchable()
                ->preload(),
        ]);
    }
}