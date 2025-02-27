<?php

namespace App\Filament\Resources\MetriDigitalPostResource\Pages;

use App\Filament\Resources\MetriDigitalPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriDigitalPost extends EditRecord
{
    protected static string $resource = MetriDigitalPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
