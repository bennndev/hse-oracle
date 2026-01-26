<?php

namespace App\Filament\Resources\SubElements\Pages;

use App\Filament\Resources\SubElements\SubElementResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSubElement extends EditRecord
{
    protected static string $resource = SubElementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
