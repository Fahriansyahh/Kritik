<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Pengirim;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PengirimResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PengirimResource\RelationManagers;

class PengirimResource extends Resource
{
    protected static ?string $model = Pengirim::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationLabel = 'User'; // label sidebar

    protected static ?string $pluralModelLabel = 'User'; // label pada title halaman list (opsional)

    protected static ?string $modelLabel = 'User'; // label tunggal (opsional)

    public static function getModelLabel(): string
    {
        return 'User';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),

                TextColumn::make('nama_lengkap')->searchable()
                    ->label('Nama Lengkap')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')->searchable()
                    ->label('Email')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->since() // contoh: "2 hari yang lalu"
                    ->sortable(),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengirims::route('/'),
            'create' => Pages\CreatePengirim::route('/create'),
            'edit' => Pages\EditPengirim::route('/{record}/edit'),
        ];
    }
}
