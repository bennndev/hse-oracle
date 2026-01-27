<?php

namespace App\Filament\Resources\Capacitacions;

use App\Filament\Resources\Capacitacions\Pages\CreateCapacitacion;
use App\Filament\Resources\Capacitacions\Pages\EditCapacitacion;
use App\Filament\Resources\Capacitacions\Pages\ListCapacitacions;
use App\Filament\Resources\Capacitacions\Schemas\CapacitacionForm;
use App\Filament\Resources\Capacitacions\Tables\CapacitacionsTable;
use App\Models\Capacitacion;
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
use Filament\Forms\Components\Toggle;

class CapacitacionResource extends Resource
{
    protected static ?string $model = Capacitacion::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
{
    return $schema
        ->schema([
            TextInput::make('nombre')
                ->label('Nombre del curso')
                ->required()
                ->maxLength(255),

            Textarea::make('descripcion')
                ->label('Descripción')
                ->rows(3),

            Select::make('categoria')
                ->label('Categoría')
                ->options([
                    'Calidad' => 'Calidad',
                    'Capacitaciones' => 'Capacitaciones',
                    'Cursos' => 'Cursos',
                    'Seguridad y Salud en el Trabajo' => 'Seguridad y Salud en el Trabajo',
                    'Sistemas Integrados de Gestión' => 'Sistemas Integrados de Gestión',
                    'Talento Humano' => 'Talento Humano',
                ])
                ->required(),

            Select::make('nivel')
                ->label('Nivel')
                ->options([
                    'Básico' => 'Básico',
                    'Intermedio' => 'Intermedio',
                    'Avanzado' => 'Avanzado',
                ])
                ->required(),

            Toggle::make('estado')
                ->label('Activo')
                ->default(true),
        ]);
}
    
public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('nombre')
                ->label('Curso')
                ->searchable()
                ->sortable(),

            TextColumn::make('categoria')
                ->sortable(),

            TextColumn::make('nivel')
                ->sortable(),

            IconColumn::make('estado')
                ->label('Activo')
                ->boolean(),

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
