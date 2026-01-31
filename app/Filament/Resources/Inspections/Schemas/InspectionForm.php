<?php

namespace App\Filament\Resources\Inspections\Schemas;

use Filament\Schemas\Schema;

class InspectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Select::make('inspection_type_id')
                    ->label('Tipo de Inspección')
                    ->relationship('inspectionType', 'nombre')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm(fn (\Filament\Schemas\Schema $schema) => \App\Filament\Resources\InspectionTypes\Schemas\InspectionTypeForm::configure($schema)->getComponents()),

                \Filament\Forms\Components\Select::make('activity_id')
                    ->label('Actividad Relacionada')
                    ->relationship('activity', 'nombre')
                    ->searchable()
                    ->preload(),

                \Filament\Forms\Components\Select::make('location_id')
                    ->label('Sede / Ubicación')
                    ->relationship('location', 'nombre')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm(fn (\Filament\Schemas\Schema $schema) => \App\Filament\Resources\Locations\Schemas\LocationForm::configure($schema)->getComponents()),

                \Filament\Forms\Components\Select::make('user_id')
                    ->label('Inspector Asignado')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload(),

                \Filament\Forms\Components\TextInput::make('mes')
                    ->label('Mes')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(12)
                    ->required(),
                \Filament\Forms\Components\TextInput::make('anio')
                    ->label('Año')
                    ->numeric()
                    ->default(date('Y'))
                    ->required(),

                \Filament\Forms\Components\DatePicker::make('fecha_programada')
                    ->label('Fecha Programada')
                    ->required(),

                \Filament\Forms\Components\DatePicker::make('fecha_ejecutada')
                    ->label('Fecha Ejecutada'),

                \Filament\Forms\Components\Select::make('estado')
                    ->options([
                        'pendiente' => 'Pendiente',
                        'conforme' => 'Conforme',
                        'no_conforme' => 'No Conforme',
                        'vencido' => 'Vencido',
                    ])
                    ->default('pendiente')
                    ->required(),

                \Filament\Forms\Components\Textarea::make('observaciones')
                    ->columnSpanFull(),
            ]);
    }
}
