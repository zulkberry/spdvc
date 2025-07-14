<?php

namespace App\Filament\Resources\SekolahUnivResource\Pages;

use App\Filament\Resources\SekolahUnivResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSekolahUniv extends EditRecord
{
    protected static string $resource = SekolahUnivResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
