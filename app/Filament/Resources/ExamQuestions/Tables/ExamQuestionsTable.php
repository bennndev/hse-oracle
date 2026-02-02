<?php

namespace App\Filament\Resources\ExamQuestions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ExamQuestionsTable
{
    public static function configure(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('pregunta')
                ->limit(50)
                ->searchable(),

            TextColumn::make('exam.titulo')
                ->label('Examen'),

            TextColumn::make('orden')
                ->sortable(),
        ]);
    }
}
