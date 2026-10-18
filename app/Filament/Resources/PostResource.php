<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'পোস্ট ও ফটোকার্ড';
    protected static ?string $modelLabel = 'পোস্ট';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('শিরোনাম / ক্যাপশন')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('category')
                    ->label('ক্যাটাগরি (যেমন: নোটিশ, আপডেট)')
                    ->maxLength(255),

                Forms\Components\FileUpload::make('image_path')
                    ->label('ফটোকার্ড (Portrait Image)')
                    ->image()
                    ->directory('posts')
                    ->maxSize(10240) // ১০ মেগাবাইট পর্যন্ত
                    ->required(),

                Forms\Components\Toggle::make('is_active')
                    ->label('সক্রিয় (Active)')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('ছবি')
                    ->circular(),
                Tables\Columns\TextColumn::make('title')
                    ->label('শিরোনাম')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->label('ক্যাটাগরি'),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('স্ট্যাটাস')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('তৈরির তারিখ')
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}