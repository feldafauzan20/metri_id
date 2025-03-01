<?php

namespace App\Filament\Resources\MetriFilmPostResource\Pages;

use App\Filament\Resources\MetriFilmPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriFilmPosts extends ListRecords
{
    protected static string $resource = MetriFilmPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
