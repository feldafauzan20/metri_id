<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $navigationGroup = 'Gallery';
    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('service_type')->label('Service Type')->sortable(),
                ImageColumn::make('image')->label('Image'),
                TextColumn::make('content')->limit(50),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                SelectFilter::make('service_type')
                    ->label('Filter by Service')
                    ->options([
                        'metri_design_posts' => 'Design',
                        'metri_digital_posts' => 'Digital',
                        'metri_entertainment_posts' => 'Entertainment',
                        'metri_event_posts' => 'Event',
                        'metri_film_equipment_posts' => 'Tang-Ting',
                        'metri_film_posts' => 'Film',
                        'metri_post_posts' => 'Post',
                    ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
