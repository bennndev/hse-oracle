<?php

namespace App\Filament\Resources\Exams\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ExamsTable
{
    public static function configure(Table $table): Table
    {
       return $table
            ->columns([
                TextColumn::make('titulo')
                    ->label('Examen')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('training.titulo')
                    ->label('Capacitación')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Creado')
                    ->dateTime()
                    ->sortable(),
            ]);
    }
}
