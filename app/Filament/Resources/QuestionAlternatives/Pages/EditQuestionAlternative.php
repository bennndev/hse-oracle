<?php

namespace App\Filament\Resources\QuestionAlternatives\Pages;

use App\Filament\Resources\QuestionAlternatives\QuestionAlternativeResource;
use Filament\Actions\DeleteAction;

use Filament\Resources\Pages\EditRecord;

class EditQuestionAlternative extends EditRecord
{
    protected static string $resource = QuestionAlternativeResource::class;

    protected function getHeaderActions(): array
    {
        return [

            DeleteAction::make(),
        ];
    }
}
