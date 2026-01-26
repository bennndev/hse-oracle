<?php

namespace App\Filament\Resources\TrainingAttendances\Pages;

use App\Filament\Resources\TrainingAttendances\TrainingAttendanceResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTrainingAttendance extends EditRecord
{
    protected static string $resource = TrainingAttendanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
