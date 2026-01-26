<?php

namespace App\Filament\Resources\ElementTypes\Pages;

use App\Filament\Resources\ElementTypes\ElementTypeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewElementType extends ViewRecord
{
    protected static string $resource = ElementTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
