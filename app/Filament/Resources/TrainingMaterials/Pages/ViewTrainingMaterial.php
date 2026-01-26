<?php

namespace App\Filament\Resources\TrainingMaterials\Pages;

use App\Filament\Resources\TrainingMaterials\TrainingMaterialResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTrainingMaterial extends ViewRecord
{
    protected static string $resource = TrainingMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
