<?php

namespace App\Filament\Resources\StudentSmpResource\Pages;

use App\Filament\Resources\StudentSmpResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudentSmps extends ListRecords
{
    protected static string $resource = StudentSmpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
