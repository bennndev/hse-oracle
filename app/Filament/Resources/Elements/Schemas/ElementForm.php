<?php

namespace App\Filament\Resources\Elements\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class ElementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            // --- BLOQUE 1: CONTEXTO DEL PROGRAMA ---
            Select::make('program_id')
                ->label('Programa Relacionado')
                ->relationship('program', 'codigo')
                ->required()
                ->searchable()
                ->preload(),

            Select::make('element_type_id')
                ->label('Tipo de Elemento')
                ->relationship('elementType', 'nombre')
                ->required()
                ->preload(),

            TextInput::make('nombre')
                ->label('Nombre del Elemento')
                ->required()
                ->maxLength(200),

            // --- BLOQUE 2: COMPONENTES DEL PROGRAMA ---
            Select::make('specific_objective_id')
                ->label('Objetivo Específico')
                ->relationship('specificObjective', 'nombre')
                ->searchable()
                ->preload(),

            Select::make('sub_element_id')
                ->label('Sub-Elemento Relacionado')
                ->relationship('subElement', 'nombre')
                ->searchable()
                ->preload(),

            Select::make('activity_id')
                ->label('Actividad a Ejecutar')
                ->relationship('activity', 'nombre')
                ->searchable()
                ->preload(),

            // --- BLOQUE 3: DETALLES ---
            Textarea::make('descripcion')
                ->label('Notas Adicionales')
                ->rows(3),

            TextInput::make('orden')
                ->label('Posición en el Listado')
                ->numeric()
                ->default(0),
        ]);
    }
}