<?php

namespace App\Filament\Resources\HasilDiagnosisResource\Pages;

use App\Filament\Resources\HasilDiagnosisResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewHasilDiagnosis extends ViewRecord
{
    protected static string $resource = HasilDiagnosisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
