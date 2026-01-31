<?php

namespace App\Filament\Resources\Inspections\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;

class InspectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('inspectionType.nombre')
                    ->label('Tipo')
                    ->searchable()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('activity.nombre')
                    ->label('Actividad')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('location.nombre')
                    ->label('Sede')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('fecha_programada')
                    ->date()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('estado')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pendiente' => 'gray',
                        'conforme' => 'success',
                        'no_conforme' => 'danger',
                        'vencido' => 'warning',
                    }),
                \Filament\Tables\Columns\TextColumn::make('user.name')
                    ->label('Inspector')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
