<?php

namespace App\Filament\Resources\StudentSmkResource\Pages;

use App\Filament\Resources\StudentSmkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudentSmk extends EditRecord
{
    protected static string $resource = StudentSmkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
