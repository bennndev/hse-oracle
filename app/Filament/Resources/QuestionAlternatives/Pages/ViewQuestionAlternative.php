<?php

namespace App\Filament\Resources\QuestionAlternatives\Pages;

use App\Filament\Resources\QuestionAlternatives\QuestionAlternativeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewQuestionAlternative extends ViewRecord
{
    protected static string $resource = QuestionAlternativeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
