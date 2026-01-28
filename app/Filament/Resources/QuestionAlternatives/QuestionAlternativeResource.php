<?php

namespace App\Filament\Resources\QuestionAlternatives;

use App\Filament\Resources\QuestionAlternatives\Pages\CreateQuestionAlternative;
use App\Filament\Resources\QuestionAlternatives\Pages\EditQuestionAlternative;
use App\Filament\Resources\QuestionAlternatives\Pages\ListQuestionAlternatives;
use App\Filament\Resources\QuestionAlternatives\Pages\ViewQuestionAlternative;
use App\Filament\Resources\QuestionAlternatives\Schemas\QuestionAlternativeForm;
use App\Filament\Resources\QuestionAlternatives\Schemas\QuestionAlternativeInfolist;
use App\Filament\Resources\QuestionAlternatives\Tables\QuestionAlternativesTable;
use App\Models\QuestionAlternative;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class QuestionAlternativeResource extends Resource
{
    protected static ?string $model = QuestionAlternative::class;

    protected static bool $shouldRegisterNavigation = false;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'descripcion';

    public static function form(Schema $schema): Schema
    {
        return QuestionAlternativeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return QuestionAlternativeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return QuestionAlternativesTable::configure($table);
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
            'index' => ListQuestionAlternatives::route('/'),
            'create' => CreateQuestionAlternative::route('/create'),
            'view' => ViewQuestionAlternative::route('/{record}'),
            'edit' => EditQuestionAlternative::route('/{record}/edit'),
        ];
    }
}
