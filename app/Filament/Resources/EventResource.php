<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Actions\DownloadAction;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\EventResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EventResource\RelationManagers;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    protected static ?string $navigationGroup = 'Събития';
    protected static ?string $navigationLabel = 'Събития';
    protected static ?string $tableTitle = 'Списък събития';
    protected static ?string $label = 'Събитие';
    protected static ?string $pluralLabel = 'Събития';
    protected static ?string $slug = 'events';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Заглавие')
                ->required()
                ->maxLength(255)
                ->columnSpanFull(), // Заема цялата ширина
            RichEditor::make('description')
                ->label('Описание')
                ->columnSpanFull(),
            DateTimePicker::make('start_datetime')
                ->label('Начална дата и час')
                ->required()
                ->native(false), // Използване на по-добър date picker
            DateTimePicker::make('end_datetime')
                ->label('Крайна дата и час')
                ->required()
                ->native(false)
                ->after('start_datetime'), // Валидация: да е след началната дата
            TextInput::make('location')
                ->label('Място')
                ->maxLength(255)
                ->columnSpanFull(),
            FileUpload::make('image_path')
                ->label('Изображение (опционално)')
                ->directory('event_images') // Папка в storage/app/public/
                ->disk('public')
                ->imageEditor() // Позволява базова редакция
                ->columnSpanFull(),
            Toggle::make('is_published')
                ->label('Публикувано')
                ->default(false) // По подразбиране не е публикувано
                ->inline(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_path')
                    ->label('Изображение')
                    ->disk('public')
                    ->width(60)->height(40) // Малък размер за таблицата
                    ->defaultImageUrl(url('/images/placeholder-event.png')), // Снимка по подразбиране, ако няма
                TextColumn::make('title')
                    ->label('Заглавие')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('start_datetime')
                    ->label('Начало')
                    ->dateTime('d.m.Y H:i') // Форматиране на датата
                    ->sortable(),
                TextColumn::make('end_datetime')
                    ->label('Край')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
                TextColumn::make('location')
                    ->label('Място')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true), // Скрита по подразбиране
                IconColumn::make('is_published')
                    ->label('Публикувано')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('creator.name') // Показва името на създателя
                    ->label('Създадено от')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true), // Скрита по подразбиране
                TextColumn::make('created_at')
                    ->label('Дата на създаване')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->label('Преглед'),
                Tables\Actions\EditAction::make()->label('Редакция'),
                Tables\Actions\DeleteAction::make()->label('Изтриване'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('Изтрий избраните'),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
