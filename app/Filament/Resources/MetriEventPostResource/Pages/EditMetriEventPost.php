<?php

namespace App\Filament\Resources\MetriEventPostResource\Pages;

use App\Filament\Resources\MetriEventPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriEventPost extends EditRecord
{
    protected static string $resource = MetriEventPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
