<?php

namespace App\Filament\Resources;


use App\Filament\Resources\MetriEntertainmentResource\Pages;
use App\Filament\Resources\MetriEntertainmentResource\RelationManagers;
use App\Models\MetriEntertainment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MetriEntertainmentResource extends Resource
{
    protected static ?string $model = MetriEntertainment::class;
    protected static ?string $navigationGroup = 'Metri Entertainment';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('youtube_link')
                    ->label('YouTube Link')
                    ->nullable()
                    ->url()
                    ->placeholder('https://www.youtube.com/watch?v=example'),

                Forms\Components\FileUpload::make('video')
                    ->label('Upload Video')
                    ->directory('videos')
                    ->acceptedFileTypes(['video/mp4', 'video/mov', 'video/avi'])
                    ->nullable(),

                Forms\Components\FileUpload::make('photo_1')
                    ->label('Foto 1')
                    ->directory('photos')
                    ->image()
                    ->nullable(),

                Forms\Components\FileUpload::make('photo_2')
                    ->label('Foto 2')
                    ->directory('photos')
                    ->image()
                    ->nullable(),

                Forms\Components\FileUpload::make('photo_3')
                    ->label('Foto 3')
                    ->directory('photos')
                    ->image()
                    ->nullable(),

                Forms\Components\FileUpload::make('photo_4')
                    ->label('Foto 4')
                    ->directory('photos')
                    ->image()
                    ->nullable(),

                Forms\Components\FileUpload::make('photo_5')
                    ->label('Foto 5')
                    ->directory('photos')
                    ->image()
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('youtube_link')
                    ->label('YouTube Link')
                    ->url(fn ($record) => $record->youtube_link, true)
                    ->searchable(),

                Tables\Columns\ImageColumn::make('photo_1')->label('Foto 1'),
                Tables\Columns\ImageColumn::make('photo_2')->label('Foto 2'),
                Tables\Columns\ImageColumn::make('photo_3')->label('Foto 3'),
                Tables\Columns\ImageColumn::make('photo_4')->label('Foto 4'),
                Tables\Columns\ImageColumn::make('photo_5')->label('Foto 5'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMetriEntertainments::route('/'),
            'create' => Pages\CreateMetriEntertainment::route('/create'),
            'edit' => Pages\EditMetriEntertainment::route('/{record}/edit'),
        ];
    }
}
