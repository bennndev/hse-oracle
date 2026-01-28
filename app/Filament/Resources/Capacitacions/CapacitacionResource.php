<?php

namespace App\Filament\Resources\Capacitacions;

use App\Filament\Resources\Capacitacions\Pages\CreateCapacitacion;
use App\Filament\Resources\Capacitacions\Pages\EditCapacitacion;
use App\Filament\Resources\Capacitacions\Pages\ListCapacitacions;
use App\Filament\Resources\Capacitacions\Schemas\CapacitacionForm;
use App\Filament\Resources\Capacitacions\Tables\CapacitacionsTable;
use App\Models\Training;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;

class CapacitacionResource extends Resource
{
    protected static ?string $model = Training::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'titulo';




public static function form(Schema $schema): Schema
{
    return $schema
        ->schema([
            TextInput::make('titulo')
                ->label('Título')
                ->required()
                ->maxLength(255),

            Textarea::make('descripcion')
                ->label('Descripción')
                ->rows(4),

            TextInput::make('url_video')
                ->label('URL del video')
                ->url(),

            TextInput::make('nota_minima')
                ->label('Nota mínima')
                ->numeric()
                ->default(70)
                ->required(),

            Select::make('estado')
                ->label('Estado')
                ->options([
                    'borrador' => 'Borrador',
                    'publicado' => 'Publicado',
                ])
                ->default('borrador')
                ->required(),

            DatePicker::make('fecha_inicio')
                ->label('Fecha de inicio'),

            DatePicker::make('fecha_fin')
                ->label('Fecha de fin'),

            TextInput::make('duracion_horas')
                ->label('Duración (horas)')
                ->numeric(),
        ]);
}


    
public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('titulo')
                ->label('Título')
                ->searchable()
                ->sortable(),

            TextColumn::make('estado')
                ->badge()
                ->colors([
                    'secondary' => 'borrador',
                    'success' => 'publicado',
                ]),

            TextColumn::make('nota_minima')
                ->label('Nota mínima')
                ->sortable(),

            TextColumn::make('created_at')
                ->label('Creado')
                ->dateTime()
                ->sortable(),
        ]);
}


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCapacitacions::route('/'),
            'create' => CreateCapacitacion::route('/create'),
            'edit' => EditCapacitacion::route('/{record}/edit'),
        ];
    }
}
