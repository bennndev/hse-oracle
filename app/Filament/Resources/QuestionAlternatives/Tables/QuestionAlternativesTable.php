<?php

namespace App\Filament\Resources\QuestionAlternatives\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class QuestionAlternativesTable
{
    public static function configure(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('descripcion')
                ->limit(60)
                ->searchable(),

            TextColumn::make('question.pregunta')
                ->label('Pregunta')
                ->limit(40),
        ]);
    }
}