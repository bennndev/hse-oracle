<?php

namespace App\Filament\Resources\SpecificObjectives\Pages;

use App\Filament\Resources\SpecificObjectives\SpecificObjectiveResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSpecificObjective extends EditRecord
{
    protected static string $resource = SpecificObjectiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
