<?php

namespace App\Filament\Resources\TrainingMaterials\Pages;

use App\Filament\Resources\TrainingMaterials\TrainingMaterialResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTrainingMaterial extends EditRecord
{
    protected static string $resource = TrainingMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
