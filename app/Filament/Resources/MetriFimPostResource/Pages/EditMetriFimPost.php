<?php

namespace App\Filament\Resources\MetriFimPostResource\Pages;

use App\Filament\Resources\MetriFimPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriFimPost extends EditRecord
{
    protected static string $resource = MetriFimPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
