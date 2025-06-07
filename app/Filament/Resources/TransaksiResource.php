<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Pengirim;
use App\Models\Metode_pembayaran;
use Filament\Forms\Form;
use App\Models\Transaksi;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\TransaksiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TransaksiResource\RelationManagers;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationLabel = 'Status Transaksi';
    protected static ?string $pluralModelLabel = 'Status Transaksi'; // label pada title halaman list (opsional)

    protected static ?string $modelLabel = 'Status Transaksi'; // label tunggal (opsional)
    public static function getModelLabel(): string
    {
        return 'Transaksi';
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Kritik & Saran';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('status_pembayaran')
                    ->label('Status Pembayaran')
                    ->options([
                        'pending' => 'Pending',
                        'sukses' => 'Sukses',
                        'gagal' => 'Gagal',
                    ])
                    ->default('pending')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pengirim.nama_lengkap')->searchable()
                    ->label('Nama Pengirim'),
                TextColumn::make('pengirim.email')->searchable()
                    ->label('Email'),
                TextColumn::make('metodePembayaran.nama_metode')->label('Metode Pembayaran')->searchable(),
                TextColumn::make('total_pembayaran')
                    ->label('Total Pembayaran'),

                BadgeColumn::make('status_pembayaran')
                    ->label('Status Pembayaran')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'sukses',
                        'danger' => 'gagal',
                    ]),


                TextColumn::make('tanggal_transaksi')
                    ->label('Tanggal Transaksi')
                    ->dateTime(),
            ])
            ->filters([
                SelectFilter::make('status_pembayaran')
                    ->label('Status Pembayaran')
                    ->options([
                        'pending' => 'Pending',
                        'sukses' => 'Sukses',
                        'gagal' => 'Gagal',
                    ]),
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->with(['pengirim', 'metodePembayaran']); // relasi harus sama persis
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
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}
