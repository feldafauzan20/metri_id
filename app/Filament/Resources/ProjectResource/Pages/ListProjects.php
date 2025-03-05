<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Resources\Pages\ListRecords;

class ListProjects extends ListRecords
{
    protected static string $resource = ProjectResource::class;

    // Hilangkan tombol "New Project" hanya di halaman ini
    protected function canCreate(): bool
    {
        return false;
    }
}
