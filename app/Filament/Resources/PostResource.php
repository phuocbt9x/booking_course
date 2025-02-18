<?php

namespace App\Filament\Resources;

use App\Filament\Forms\Components\CKEditor;
use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Quản lý nội dung';
    protected static ?string $navigationLabel = 'Bài viết';
    protected static ?string $pluralLabel = 'Bài viết';
    protected static ?int $navigationSort = 2;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Select::make('categories')
                    ->label('Chọn danh mục')
                    ->relationship('categories', 'name', function ($query) {
                        $query->where('activated', 1);
                    })
                    ->multiple()
                    ->required(),

                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->disabled()
                    ->hidden(),

                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->disk('post')
                    ->directory('thumbnails')
                    ->required()
                    ->columnSpanFull(),

                CKEditor::make('content')
                    ->label('Nội dung')
                    ->required()
                    ->columnSpanFull(),

                Toggle::make('activated')
                    ->label('Kích hoạt')
                    ->default(false)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                BooleanColumn::make('activated')->label('Kích hoạt'),
                ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->disk('post')
                    ->width(100)
                    ->height(100),
            ]);
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
