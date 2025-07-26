<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'Site Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('site_name')->label('Website Name')->required(),
                FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->directory('logos')
                    ->visibility('public'),

                FileUpload::make('favicon')
                    ->label('Favicon')
                    ->image()
                    ->directory('logos')
                    ->visibility('public'),
                    Repeater::make('operational_hours')
                    ->label('Jam Operasional')
                    ->schema([
                        TextInput::make('day')->label('Hari'),
                        TextInput::make('time')->label('Jam'),
                    ])
                    ->columns(2)
                    ->json(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')->label('Logo')->square(),
                Tables\Columns\TextColumn::make('site_name')->label('Website Name'),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
