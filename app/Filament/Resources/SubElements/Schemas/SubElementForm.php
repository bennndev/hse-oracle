<?php

namespace App\Filament\Resources\SubElements\Schemas;

use Filament\Schemas\Schema;

class SubElementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            // Usamos la ruta absoluta para garantizar que PHP encuentre la clase
            \Filament\Forms\Components\TextInput::make('nombre')
                ->label('Nombre del Sub-Elemento')
                ->required()
                ->maxLength(255)
                ->placeholder('Ej: Identificación de peligros y evaluación de riesgos'),

            \Filament\Forms\Components\Textarea::make('descripcion')
                ->label('Descripción Técnica (Opcional)')
                ->rows(4)
                ->placeholder('Describa el alcance o propósito de este sub-componente...'),
        ]);
    }
}