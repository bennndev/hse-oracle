<?php

namespace App\Filament\Resources\SubElements\Pages;

use App\Filament\Resources\SubElements\SubElementResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSubElement extends ViewRecord
{
    protected static string $resource = SubElementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
