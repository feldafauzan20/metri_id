<?php

namespace App\Filament\Resources\MetriFilmEquipmentPostResource\Pages;

use App\Filament\Resources\MetriFilmEquipmentPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriFilmEquipmentPost extends EditRecord
{
    protected static string $resource = MetriFilmEquipmentPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
