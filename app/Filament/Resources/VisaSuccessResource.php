<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisaSuccessResource\Pages;
use App\Models\VisaSuccess;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class VisaSuccessResource extends Resource
{
    protected static ?string $model = VisaSuccess::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-badge';
    protected static ?string $navigationLabel = 'Visa Successes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Title / Headline')
                    ->placeholder('e.g., Tourist Visa Success')
                    ->maxLength(255),

                Forms\Components\TextInput::make('route')
                    ->label('Port / Route')
                    ->placeholder('e.g., Haridaspur / Gede / Air')
                    ->maxLength(255),

                Forms\Components\DatePicker::make('issue_date')
                    ->label('Date of Issue')
                    ->native(false),

                Forms\Components\DatePicker::make('expiry_date')
                    ->label('Date of Expiry')
                    ->native(false),

                Forms\Components\FileUpload::make('image_path')
                    ->label('Visa Sticker / Copy Image')
                    ->directory('visa-successes')
                    ->image()
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\Toggle::make('is_active')
                    ->label('Show on Landing Page')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Image')
                    ->square(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('route'),
                Tables\Columns\TextColumn::make('issue_date')
                    ->date('d M Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('expiry_date')
                    ->date('d M Y')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVisaSuccesses::route('/'),
            'create' => Pages\CreateVisaSuccess::route('/create'),
            'edit' => Pages\EditVisaSuccess::route('/{record}/edit'),
        ];
    }
}