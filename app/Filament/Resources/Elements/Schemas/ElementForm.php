<?php

namespace App\Filament\Resources\Elements\Schemas;

use Filament\Schemas\Schema;

class ElementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            // --- BLOQUE 1: CONTEXTO DEL PROGRAMA ---
            \Filament\Forms\Components\Select::make('program_id')
                ->label('Programa Relacionado')
                ->relationship('program', 'codigo')
                ->required()
                ->searchable()
                ->preload(),

            \Filament\Forms\Components\Select::make('element_type_id')
                ->label('Tipo de Elemento')
                ->relationship('elementType', 'nombre')
                ->required()
                ->preload(),

            \Filament\Forms\Components\TextInput::make('nombre')
                ->label('Nombre del Elemento')
                ->required()
                ->maxLength(200),

            // --- BLOQUE 2: COMPONENTES DEL PROGRAMA ---
            \Filament\Forms\Components\Select::make('specific_objective_id')
                ->label('Objetivo Específico')
                ->relationship('specificObjective', 'nombre')
                ->searchable()
                ->preload(),

            \Filament\Forms\Components\Select::make('sub_element_id')
                ->label('Sub-Elemento Relacionado')
                ->relationship('subElement', 'nombre')
                ->searchable()
                ->preload(),

            \Filament\Forms\Components\Select::make('activity_id')
                ->label('Actividad a Ejecutar')
                ->relationship('activity', 'nombre')
                ->searchable()
                ->preload(),

            // --- BLOQUE 3: DETALLES ---
            \Filament\Forms\Components\Textarea::make('descripcion')
                ->label('Notas Adicionales')
                ->rows(3),

            \Filament\Forms\Components\TextInput::make('orden')
                ->label('Posición en el Listado')
                ->numeric()
                ->default(0),
        ]);
    }
}