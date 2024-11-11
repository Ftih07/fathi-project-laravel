<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransmissionResource\Pages;
use App\Filament\Resources\TransmissionResource\RelationManagers;
use App\Models\Transmission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransmissionResource extends Resource
{
    protected static ?string $model = Transmission::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('type')
                    ->label('Transmission Type')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('type')
                    ->label('Transmission Type')
                    ->searchable()
                    ->sortable(),
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransmissions::route('/'),
            'create' => Pages\CreateTransmission::route('/create'),
            'edit' => Pages\EditTransmission::route('/{record}/edit'),
        ];
    }
}
