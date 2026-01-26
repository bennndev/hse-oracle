<?php

namespace App\Filament\Resources\SubElements\Pages;

use App\Filament\Resources\SubElements\SubElementResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSubElements extends ListRecords
{
    protected static string $resource = SubElementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
