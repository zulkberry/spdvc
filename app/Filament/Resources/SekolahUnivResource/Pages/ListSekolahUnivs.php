<?php

namespace App\Filament\Resources\SekolahUnivResource\Pages;

use App\Filament\Resources\SekolahUnivResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSekolahUnivs extends ListRecords
{
    protected static string $resource = SekolahUnivResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
