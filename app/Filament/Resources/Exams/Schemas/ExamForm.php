<?php

namespace App\Filament\Resources\Exams\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use App\Models\Training;

class ExamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('training_id')
                    ->label('Capacitación')
                    ->options(
                        Training::query()
                            ->orderBy('titulo')
                            ->pluck('titulo', 'id')
                    )
                    ->searchable()
                    ->required(),

                TextInput::make('titulo')
                    ->label('Título del examen')
                    ->required()
                    ->maxLength(255),

                TextInput::make('url')
                    ->label('URL del examen (Drive / Formulario)')
                    ->url()
                    ->maxLength(500),
            ]);
    }
}
