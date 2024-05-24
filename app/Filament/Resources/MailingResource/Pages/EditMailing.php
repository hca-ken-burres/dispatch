<?php

namespace App\Filament\Resources\MailingResource\Pages;

use App\Filament\Resources\MailingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMailing extends EditRecord
{
    protected static string $resource = MailingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
