<?php

namespace App\Filament\Resources\SpecificObjectives\Pages;

use App\Filament\Resources\SpecificObjectives\SpecificObjectiveResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSpecificObjective extends ViewRecord
{
    protected static string $resource = SpecificObjectiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
