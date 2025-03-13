<?php

namespace App\Filament\Resources;


use App\Filament\Resources\MetriLandingPageResource\Pages;
use App\Models\MetriLandingPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Illuminate\Support\Str;

class MetriLandingPageResource extends Resource
{
    protected static ?string $model = MetriLandingPage::class;
    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Input Data')
                    ->schema([
                        
                        TextInput::make(name: 'youtube_link')->url()->nullable(),
                        FileUpload::make('video')
                            ->label('Upload Video')
                            ->directory('metri_landing_videos'),
                    ]),
            ]);
    }
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('youtube_link')->label('YouTube Link')->limit(30),
                Tables\Columns\TextColumn::make('video')->label('Video')->limit(30),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMetriLandingPages::route('/'),
            'create' => Pages\CreateMetriLandingPage::route('/create'),
            'edit' => Pages\EditMetriLandingPage::route('/{record}/edit'),
        ];
    }
}