<?php
namespace App\Filament\Resources;

use App\Filament\Resources\MetriDesignPostResource\Pages;
use App\Models\MetriDesignPost;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class MetriDesignPostResource extends Resource
{
    protected static ?string $model = MetriDesignPost::class;
    protected static ?string $navigationGroup = 'Metri';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('image')
                    ->directory('metri_design_posts')
                    ->image()
                    ->required(),
                RichEditor::make('content')
                    ->required(),
                TextInput::make('link')
                    ->url()
                    ->nullable(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                ImageColumn::make('image'),
                TextColumn::make('content')->limit(50),
                TextColumn::make('link')->limit(30),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMetriDesignPosts::route('/'),
            'create' => Pages\CreateMetriDesignPost::route('/create'),
            'edit' => Pages\EditMetriDesignPost::route('/{record}/edit'),
        ];
    }
}
