<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Kritik_saran;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KritikSaranResource\Pages;
use App\Filament\Resources\KritikSaranResource\RelationManagers;

class KritikSaranResource extends Resource
{
    protected static ?string $model = Kritik_saran::class;
    protected static ?string $navigationIcon = 'heroicon-o-inbox';
    protected static ?string $navigationLabel = 'Kritik Saran';
    protected static ?string $pluralModelLabel = 'Kritik Saran'; // label pada title halaman list (opsional)

    protected static ?string $modelLabel = 'Kritik Saran';
    public static function getModelLabel(): string
    {
        return 'Kritik Saran';
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Kritik & Saran';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('status_tanggapan')
                    ->label('Status Tanggapan')
                    ->options([
                        'belum_ditanggapi' => 'Belum Ditanggapi',
                        'ditanggapi' => 'Ditanggapi',
                    ])
                    ->default('belum_ditanggapi')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pengirim.nama_lengkap')
                    ->label('Nama Pengirim')
                    ->searchable(),

                TextColumn::make('transaksi.total_pembayaran')
                    ->label('Total Pembayaran Transaksi'),

                BadgeColumn::make('transaksi.status_pembayaran')
                    ->label('Status Pembayaran Transaksi')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'sukses',
                        'danger' => 'gagal',
                    ]),

                TextColumn::make('isi_pesan')
                    ->label('Isi Pesan')
                    ->searchable(),
                TextColumn::make('kepuasan')
                    ->label('kepuasan')
                    ->searchable(),

                BadgeColumn::make('status_tanggapan')
                    ->label('Status Tanggapan')
                    ->colors([
                        'warning' => 'belum_ditanggapi',
                        'success' => 'ditanggapi',
                    ]),

                TextColumn::make('waktu_input')
                    ->label('Waktu Input')
                    ->dateTime(),
            ])
            ->filters([
                SelectFilter::make('status_tanggapan')
                    ->label('Status Tanggapan')
                    ->options([
                        'belum_ditanggapi' => 'Belum Ditanggapi',
                        'ditanggapi' => 'Ditanggapi',
                    ]),
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
            'index' => Pages\ListKritikSarans::route('/'),
            'create' => Pages\CreateKritikSaran::route('/create'),
            'edit' => Pages\EditKritikSaran::route('/{record}/edit'),
        ];
    }
}
