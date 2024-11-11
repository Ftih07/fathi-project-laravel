<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MobilResource\Pages;
use App\Filament\Resources\MobilResource\RelationManagers;
use App\Models\Mobil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MobilResource extends Resource
{
    protected static ?string $model = Mobil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('price')->numeric()->required(),
                Forms\Components\TextInput::make('rating')->numeric(),
                Forms\Components\TextInput::make('seats')->numeric()->required(),
                Forms\Components\TextInput::make('engine_type')->required(),
                Forms\Components\TextInput::make('range')->required(),
                Forms\Components\Select::make('car_type_id')
                    ->label('Car Type')
                    ->relationship('carType', 'name')
                    ->required(),
                Forms\Components\Select::make('car_model_id')
                    ->label('Car Model')
                    ->relationship('carModel', 'name')
                    ->required(),
                Forms\Components\Select::make('transmission_id')
                    ->label('Transmission')
                    ->relationship('transmission', 'type')
                    ->required(),
                Forms\Components\TextInput::make('image_url')->label('Image URL'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')->sortable(),
                Tables\Columns\TextColumn::make('price')->sortable(),
                Tables\Columns\TextColumn::make('rating')->sortable(),
                Tables\Columns\TextColumn::make('carType.name')->label('Car Type')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('carModel.name')->label('Car Model')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('transmission.type')->label('Transmission')->searchable()->sortable(),
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
            'index' => Pages\ListMobils::route('/'),
            'create' => Pages\CreateMobil::route('/create'),
            'edit' => Pages\EditMobil::route('/{record}/edit'),
        ];
    }
}
