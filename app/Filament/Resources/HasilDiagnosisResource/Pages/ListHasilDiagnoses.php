<?php

namespace App\Filament\Resources\HasilDiagnosisResource\Pages;

use App\Filament\Resources\HasilDiagnosisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHasilDiagnoses extends ListRecords
{
    protected static string $resource = HasilDiagnosisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
