<?php

namespace App\Filament\Resources\TrainingMaterials\Pages;

use App\Filament\Resources\TrainingMaterials\TrainingMaterialResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTrainingMaterials extends ListRecords
{
    protected static string $resource = TrainingMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
