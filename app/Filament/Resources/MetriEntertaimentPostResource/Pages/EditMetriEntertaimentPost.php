<?php

namespace App\Filament\Resources\MetriEntertaimentPostResource\Pages;

use App\Filament\Resources\MetriEntertaimentPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriEntertaimentPost extends EditRecord
{
    protected static string $resource = MetriEntertaimentPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
