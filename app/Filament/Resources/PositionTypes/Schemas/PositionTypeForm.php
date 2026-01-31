<?php

namespace App\Filament\Resources\PositionTypes\Schemas;

use Filament\Schemas\Schema;

class PositionTypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(100),
                \Filament\Forms\Components\Textarea::make('descripcion')
                    ->columnSpanFull(),
            ]);
    }
}
