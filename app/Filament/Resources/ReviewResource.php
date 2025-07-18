<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Models\Review;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationLabel = 'Review';
    protected static ?string $modelLabel = 'Review';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('position'),
                Forms\Components\Textarea::make('quote')->required(),
                Forms\Components\Select::make('rating')
                    ->options([
                        1 => '⭐️',
                        2 => '⭐️⭐️',
                        3 => '⭐️⭐️⭐️',
                        4 => '⭐️⭐️⭐️⭐️',
                        5 => '⭐️⭐️⭐️⭐️⭐️',
                    ])
                    ->default(5)
                    ->required(),

                // Jika ingin mengaktifkan upload avatar, hapus komentar di bawah:
                // Forms\Components\FileUpload::make('avatar')
                //     ->image()
                //     ->directory('avatars')
                //     ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('quote')->limit(40),
                Tables\Columns\TextColumn::make('rating')->sortable(),
                // Tables\Columns\ImageColumn::make('avatar')->circular(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
