<?php

namespace App\Filament\Resources\ElementTypes\Pages;

use App\Filament\Resources\ElementTypes\ElementTypeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListElementTypes extends ListRecords
{
    protected static string $resource = ElementTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
