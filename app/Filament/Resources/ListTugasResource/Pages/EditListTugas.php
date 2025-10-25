<?php

namespace App\Filament\Resources\ListTugasResource\Pages;

use App\Filament\Resources\ListTugasResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditListTugas extends EditRecord
{
    protected static string $resource = ListTugasResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
