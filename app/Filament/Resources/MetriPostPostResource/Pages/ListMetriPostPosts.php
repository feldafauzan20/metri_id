<?php

namespace App\Filament\Resources\MetriPostPostResource\Pages;

use App\Filament\Resources\MetriPostPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriPostPosts extends ListRecords
{
    protected static string $resource = MetriPostPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
