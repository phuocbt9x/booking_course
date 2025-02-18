<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\MultiSelect;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationGroup = 'Quản lý nội dung';
    protected static ?string $navigationLabel = 'Bài viết';
    protected static ?string $pluralLabel = 'Bài viết';
    protected static ?int $navigationSort = 2;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->columnSpanFull(),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->disabled()
                    ->hidden(),

                TextInput::make('thumbnail')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                TextArea::make('content')
                    ->required()
                    ->columnSpanFull(),

                Toggle::make('activated')
                    ->label('Kích hoạt')
                    ->default(false)
                    ->columnSpanFull(),

                MultiSelect::make('categories')
                    ->label('Danh mục')
                    ->relationship('categories', 'name')
                    ->searchable()
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('slug')->sortable()->searchable(),
                BooleanColumn::make('activated')->label('Kích hoạt'),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                // Add filters if necessary
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
