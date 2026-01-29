<?php

namespace App\Filament\Resources\Programs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('codigo')
                ->label('Código del Programa')
                ->required()
                ->unique(ignoreRecord: true),
            
            TextInput::make('version')
                ->label('Versión')
                ->required()
                ->maxLength(10),

            Textarea::make('obj_general')
                ->label('Objetivo General')
                ->rows(3),

            TextInput::make('autor')
                ->label('Autor / Elaborado por')
                ->maxLength(150),

            Select::make('supervisor_id')
                ->label('Supervisor Responsable')
                ->relationship('supervisor', 'nombre') 
                ->searchable()
                ->preload(),

            DatePicker::make('fecha_emision')
                ->label('Fecha de Emisión'),
            
            DatePicker::make('fecha_edicion')
                ->label('Fecha de Edición'),

            DatePicker::make('fecha_revision')
                ->label('Fecha de Revisión'),
        ]);
    }
}