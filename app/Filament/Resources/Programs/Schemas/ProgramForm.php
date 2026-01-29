<?php

namespace App\Filament\Resources\Programs\Schemas;

use Filament\Schemas\Schema;

class ProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            // Usamos componentes directos para máxima compatibilidad
            \Filament\Forms\Components\TextInput::make('codigo')
                ->label('Código del Programa')
                ->required()
                ->unique(ignoreRecord: true),
            
            \Filament\Forms\Components\TextInput::make('version')
                ->label('Versión')
                ->required()
                ->maxLength(10),

            \Filament\Forms\Components\Textarea::make('obj_general')
                ->label('Objetivo General')
                ->rows(3),

            \Filament\Forms\Components\TextInput::make('autor')
                ->label('Autor / Elaborado por')
                ->maxLength(150),

            \Filament\Forms\Components\Select::make('supervisor_id')
                ->label('Supervisor Responsable')
                ->relationship('supervisor', 'nombre') 
                ->searchable()
                ->preload(),

            \Filament\Forms\Components\DatePicker::make('fecha_emision')
                ->label('Fecha de Emisión'),
            
            \Filament\Forms\Components\DatePicker::make('fecha_edicion')
                ->label('Fecha de Edición'),

            \Filament\Forms\Components\DatePicker::make('fecha_revision')
                ->label('Fecha de Revisión'),
        ]);
    }
}