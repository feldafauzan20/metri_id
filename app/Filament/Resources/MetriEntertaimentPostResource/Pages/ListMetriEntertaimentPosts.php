<?php

namespace App\Filament\Resources\MetriEntertaimentPostResource\Pages;

use App\Filament\Resources\MetriEntertaimentPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriEntertaimentPosts extends ListRecords
{
    protected static string $resource = MetriEntertaimentPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
