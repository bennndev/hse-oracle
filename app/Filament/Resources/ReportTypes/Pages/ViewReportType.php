<?php

namespace App\Filament\Resources\ReportTypes\Pages;

use App\Filament\Resources\ReportTypes\ReportTypeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewReportType extends ViewRecord
{
    protected static string $resource = ReportTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
