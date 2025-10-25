<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ListTugasResource\Pages;
use App\Filament\Resources\ListTugasResource\RelationManagers;
use App\Models\ListTugas;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ListTugasResource extends Resource
{
    protected static ?string $model = ListTugas::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'List Tugas';

    protected static ?string $modelLabel = 'Tugas';

    protected static ?string $pluralModelLabel = 'List Tugas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->label('Judul Tugas'),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->rows(3)
                    ->label('Deskripsi'),
                Forms\Components\TextInput::make('link')
                    ->url()
                    ->label('Link Tugas')
                    ->placeholder('https://example.com'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul Tugas')
                    ->searchable()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('deskripsi')
                //     ->label('Deskripsi')
                //     ->limit(50)
                //     ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                //         $state = $column->getState();
                //         if (strlen($state) <= $column->getCharacterLimit()) {
                //             return null;
                //         }
                //         return $state;
                //     }),
                Tables\Columns\TextColumn::make('link')
                    ->label('Link')
                    ->url(fn ($record) => $record->link)
                    ->openUrlInNewTab()
                    ->limit(30),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListListTugas::route('/'),
            'create' => Pages\CreateListTugas::route('/create'),
            'edit' => Pages\EditListTugas::route('/{record}/edit'),
        ];
    }
}
