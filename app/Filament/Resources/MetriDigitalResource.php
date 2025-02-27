<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MetriDigitalResource\Pages;
use App\Filament\Resources\MetriDigitalResource\RelationManagers;
use App\Models\MetriDigital;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MetriDigitalResource extends Resource
{
    protected static ?string $model = MetriDigital::class;
    protected static ?string $navigationGroup = 'Metri Digital';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('youtube_link')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('video')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('photo_1')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('photo_2')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('photo_3')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('photo_4')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('photo_5')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('youtube_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video')
                    ->searchable(),
                Tables\Columns\TextColumn::make('photo_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('photo_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('photo_3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('photo_4')
                    ->searchable(),
                Tables\Columns\TextColumn::make('photo_5')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMetriDigitals::route('/'),
            'create' => Pages\CreateMetriDigital::route('/create'),
            'edit' => Pages\EditMetriDigital::route('/{record}/edit'),
        ];
    }
}
