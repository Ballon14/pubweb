<?php

namespace App\Filament\Resources\ListTugasResource\Pages;

use App\Filament\Resources\ListTugasResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListListTugas extends ListRecords
{
    protected static string $resource = ListTugasResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
