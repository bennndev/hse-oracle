<?php

namespace App\Filament\Resources\Positions\Schemas;

use Filament\Schemas\Schema;

class PositionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('nombre')
                    ->label('Nombre del Cargo')
                    ->required()
                    ->maxLength(100),

                \Filament\Forms\Components\Select::make('position_type_id')
                    ->label('Tipo de Cargo')
                    ->relationship('positionType', 'nombre')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm(fn (\Filament\Schemas\Schema $schema) => \App\Filament\Resources\PositionTypes\Schemas\PositionTypeForm::configure($schema)->getComponents()),

                \Filament\Forms\Components\Textarea::make('descripcion')
                    ->label('Descripción')
                    ->columnSpanFull(),
            ]);
    }
}
