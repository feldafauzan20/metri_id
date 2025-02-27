<?php

namespace App\Filament\Resources\MetriFilmEquipmentPostResource\Pages;

use App\Filament\Resources\MetriFilmEquipmentPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriFilmEquipmentPosts extends ListRecords
{
    protected static string $resource = MetriFilmEquipmentPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
