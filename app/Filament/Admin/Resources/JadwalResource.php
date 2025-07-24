<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\JadwalResource\Pages;
use App\Models\Jadwal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class JadwalResource extends Resource
{
    protected static ?string $model = Jadwal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_pelatihan')
                    ->required()
                    ->label('Nama Pelatihan'),

                DatePicker::make('tanggal_mulai')
                    ->required()
                    ->label('Tanggal Mulai'),

                DatePicker::make('tanggal_selesai')
                    ->required()
                    ->label('Tanggal Selesai'),

                TextInput::make('lokasi')
                    ->required(),

                TextInput::make('hasil_sertifikasi')
                    ->nullable()
                    ->label('Hasil Sertifikasi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_pelatihan'),
                Tables\Columns\TextColumn::make('tanggal_mulai')->date(),
                Tables\Columns\TextColumn::make('tanggal_selesai')->date(),
                Tables\Columns\TextColumn::make('lokasi'),
                Tables\Columns\TextColumn::make('hasil_sertifikasi'),
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
            'index' => Pages\ListJadwals::route('/'),
            'create' => Pages\CreateJadwal::route('/create'),
            'edit' => Pages\EditJadwal::route('/{record}/edit'),
        ];
    }
}
