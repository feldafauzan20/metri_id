<?php

namespace App\Filament\Resources\MetriFimPostResource\Pages;

use App\Filament\Resources\MetriFimPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriFimPosts extends ListRecords
{
    protected static string $resource = MetriFimPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
