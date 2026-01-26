<?php

namespace App\Filament\Resources\InspectionTypes\Pages;

use App\Filament\Resources\InspectionTypes\InspectionTypeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditInspectionType extends EditRecord
{
    protected static string $resource = InspectionTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
