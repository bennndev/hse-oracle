<?php

namespace App\Filament\Resources\InspectionTypes\Pages;

use App\Filament\Resources\InspectionTypes\InspectionTypeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewInspectionType extends ViewRecord
{
    protected static string $resource = InspectionTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
