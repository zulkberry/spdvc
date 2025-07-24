<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProgresResource\Pages;
use App\Models\Progres;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProgresResource extends Resource
{
    protected static ?string $model = Progres::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->label('Judul Progres'),

                Textarea::make('deskripsi')
                    ->label('Deskripsi'),

                Select::make('status')
                    ->options([
                        'belum' => 'Belum Dikerjakan',
                        'proses' => 'Sedang Dikerjakan',
                        'selesai' => 'Selesai',
                    ])
                    ->required()
                    ->label('Status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')->searchable(),
                Tables\Columns\TextColumn::make('status')->badge(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->label('Dibuat'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProgres::route('/'),
            'create' => Pages\CreateProgres::route('/create'),
            'edit' => Pages\EditProgres::route('/{record}/edit'),
        ];
    }
}
