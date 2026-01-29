<?php

namespace App\Filament\Resources\SpecificObjectives\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class SpecificObjectiveForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nombre')
                ->label('Nombre del Objetivo')
                ->required()
                ->maxLength(255)
                ->placeholder('Ej: Reducir incidentes en un 10%'),

            Textarea::make('descripcion')
                ->label('Descripción Detallada')
                ->rows(3)
                ->placeholder('Describa cómo se medirá este objetivo...'),
        ]);
    }
}