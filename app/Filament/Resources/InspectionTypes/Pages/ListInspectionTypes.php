<?php

namespace App\Filament\Resources\InspectionTypes\Pages;

use App\Filament\Resources\InspectionTypes\InspectionTypeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInspectionTypes extends ListRecords
{
    protected static string $resource = InspectionTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
