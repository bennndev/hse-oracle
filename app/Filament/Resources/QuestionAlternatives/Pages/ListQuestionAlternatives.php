<?php

namespace App\Filament\Resources\QuestionAlternatives\Pages;

use App\Filament\Resources\QuestionAlternatives\QuestionAlternativeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListQuestionAlternatives extends ListRecords
{
    protected static string $resource = QuestionAlternativeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
