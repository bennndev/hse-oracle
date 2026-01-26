<?php

namespace App\Filament\Resources\SpecificObjectives\Pages;

use App\Filament\Resources\SpecificObjectives\SpecificObjectiveResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSpecificObjectives extends ListRecords
{
    protected static string $resource = SpecificObjectiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
