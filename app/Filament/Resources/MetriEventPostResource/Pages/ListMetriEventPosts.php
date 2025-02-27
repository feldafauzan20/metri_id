<?php

namespace App\Filament\Resources\MetriEventPostResource\Pages;

use App\Filament\Resources\MetriEventPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriEventPosts extends ListRecords
{
    protected static string $resource = MetriEventPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
