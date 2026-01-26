<?php

namespace App\Filament\Resources\Elements\Pages;

use App\Filament\Resources\Elements\ElementResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewElement extends ViewRecord
{
    protected static string $resource = ElementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
