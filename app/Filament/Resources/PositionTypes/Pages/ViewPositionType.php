<?php

namespace App\Filament\Resources\PositionTypes\Pages;

use App\Filament\Resources\PositionTypes\PositionTypeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPositionType extends ViewRecord
{
    protected static string $resource = PositionTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
