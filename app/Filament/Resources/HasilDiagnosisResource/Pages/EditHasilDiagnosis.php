<?php

namespace App\Filament\Resources\HasilDiagnosisResource\Pages;

use App\Filament\Resources\HasilDiagnosisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHasilDiagnosis extends EditRecord
{
    protected static string $resource = HasilDiagnosisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
