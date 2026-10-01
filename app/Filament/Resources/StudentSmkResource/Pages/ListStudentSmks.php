<?php

namespace App\Filament\Resources\StudentSmkResource\Pages;

use App\Filament\Resources\StudentSmkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudentSmks extends ListRecords
{
    protected static string $resource = StudentSmkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
