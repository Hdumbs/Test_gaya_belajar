<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentSmpResource\Pages;
use App\Filament\Resources\StudentSmpResource\RelationManagers;
use App\Models\StudentSmp;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentSmpResource extends Resource
{
    protected static ?string $model = StudentSmp::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                //
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
            'index' => Pages\ListStudentSmps::route('/'),
            'create' => Pages\CreateStudentSmp::route('/create'),
            'edit' => Pages\EditStudentSmp::route('/{record}/edit'),
        ];
    }
}
