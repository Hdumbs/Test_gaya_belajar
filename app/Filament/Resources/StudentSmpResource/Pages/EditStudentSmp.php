<?php

namespace App\Filament\Resources\StudentSmpResource\Pages;

use App\Filament\Resources\StudentSmpResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudentSmp extends EditRecord
{
    protected static string $resource = StudentSmpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
