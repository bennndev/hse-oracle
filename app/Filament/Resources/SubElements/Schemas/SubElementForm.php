<?php

namespace App\Filament\Resources\SubElements\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class SubElementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            TextInput::make('nombre')
                ->label('Nombre del Sub-Elemento')
                ->required()
                ->maxLength(255)
                ->placeholder('Ej: Identificación de peligros y evaluación de riesgos'),

            Textarea::make('descripcion')
                ->label('Descripción Técnica (Opcional)')
                ->rows(4)
                ->placeholder('Describa el alcance o propósito de este sub-componente...'),
        ]);
    }
}