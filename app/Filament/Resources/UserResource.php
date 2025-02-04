<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
        
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name*')
                    ->required(),
                Forms\Components\TextInput::make('lastname')
                    ->label('LastName (pas obligatoire)'),
                Forms\Components\TextInput::make('email')
                    ->label('Email (pas obligatoire)'),
                Forms\Components\Select::make('role')
                    ->label('Role*')
                    ->required()
                    ->options([
                        'FOUNDER' => 'Founder',
                        'CO-FOUNDER' => 'Co-Founder',
                        'ADVISORY BOARDS' => 'Advisory Boards',
                    ]),
                FileUpload::make('image')
                    ->image()
                    ->label('Photo profile')
                    ->directory('team-images'),
                Forms\Components\TextInput::make('password')
                    ->label('Mot de passe')
                    ->password(),
            ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('lastname'),
                Tables\Columns\TextColumn::make('role'),
                Tables\Columns\ImageColumn::make('image')->label('Profile'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Modifier'),
                Tables\Actions\DeleteAction::make()
                    ->label(''),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                    ->label('Tous supprimer'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return parent::getEloquentQuery()->orderBy('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}