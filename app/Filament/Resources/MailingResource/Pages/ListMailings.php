<?php

namespace App\Filament\Resources\MailingResource\Pages;

use App\Filament\Resources\MailingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMailings extends ListRecords
{
    protected static string $resource = MailingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
