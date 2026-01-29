<?php

namespace App\Filament\Resources\ElementTypes\Schemas;

use Filament\Schemas\Schema;

class ElementTypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            \Filament\Forms\Components\TextInput::make('nombre')
                ->label('Nombre del Tipo')
                ->required()
                ->maxLength(50),

            \Filament\Forms\Components\Textarea::make('descripcion')
                ->label('Descripción Opcional')
                ->rows(3),

            \Filament\Forms\Components\Select::make('training_id')
                ->label('Capacitación Asociada (Opcional)')
                // CAMBIA 'nombre' por la columna real de tu tabla trainings (ej: 'titulo' o 'tema')
                ->relationship('training', 'titulo') 
                ->searchable()
                ->preload(),
        ]);
    }
}