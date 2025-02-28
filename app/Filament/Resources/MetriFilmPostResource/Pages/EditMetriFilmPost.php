<?php

namespace App\Filament\Resources\MetriFilmPostResource\Pages;

use App\Filament\Resources\MetriFilmPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriFilmPost extends EditRecord
{
    protected static string $resource = MetriFilmPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
