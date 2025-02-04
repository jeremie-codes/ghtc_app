<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjetResource\Pages;
use App\Filament\Resources\ProjetResource\RelationManagers;
use App\Models\Projet;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;;

class ProjetResource extends Resource
{
    protected static ?string $model = Projet::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
         return $form
            ->schema([
                Forms\Components\TextInput::make('auteur')
                    ->required()
                    ->label('Auteur du projet'),
                Forms\Components\TextInput::make('titre')
                    ->required()
                    ->label('Titre du projet'),
                Forms\Components\TextInput::make('domaine')
                    ->required()
                    ->label('Domaine du projet'),
                Forms\Components\Textarea::make('description')
                    ->label('Description'),
                FileUpload::make('image')
                    ->image()
                    ->label('Image')
                    ->directory('projet-images'), // chemin de stockage des images
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('auteur'),
                Tables\Columns\TextColumn::make('titre'),
                Tables\Columns\TextColumn::make('description')->label('Description')->limit(50),
                Tables\Columns\ImageColumn::make('image')->label('Image'),
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
            'index' => Pages\ListProjets::route('/'),
            'create' => Pages\CreateProjet::route('/create'),
            'edit' => Pages\EditProjet::route('/{record}/edit'),
        ];
    }
}
