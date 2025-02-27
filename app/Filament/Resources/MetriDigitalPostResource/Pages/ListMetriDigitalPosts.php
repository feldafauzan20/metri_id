<?php

namespace App\Filament\Resources\MetriDigitalPostResource\Pages;

use App\Filament\Resources\MetriDigitalPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriDigitalPosts extends ListRecords
{
    protected static string $resource = MetriDigitalPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
