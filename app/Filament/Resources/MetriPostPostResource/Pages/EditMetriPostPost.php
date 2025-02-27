<?php

namespace App\Filament\Resources\MetriPostPostResource\Pages;

use App\Filament\Resources\MetriPostPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriPostPost extends EditRecord
{
    protected static string $resource = MetriPostPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
