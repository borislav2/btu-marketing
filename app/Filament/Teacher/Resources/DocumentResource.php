<?php

namespace App\Filament\Teacher\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use League\CommonMark\Node\Block\Document;
use App\Filament\Resources\DocumentResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;
    protected static ?string $navigationGroup = 'Учебни материали';
    protected static ?string $navigationLabel = 'Документи';
    protected static ?string $label = 'Документ';
    protected static ?string $pluralLabel = 'Документи';
    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Заглавие')
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),
            TextInput::make('description')
                ->label('Описание')
                ->columnSpanFull(),
            FileUpload::make('file_path')
                ->label('Файл')
                ->required()
                ->live()
                ->directory('resources') // Папка в storage/app/public/
                ->disk('public')
                ->visibility('public')
                ->storeFileNamesIn('original_filename')
                 ->afterStateUpdated(function (callable $set, TemporaryUploadedFile $state) {
                         $set('mime_type', $state->getMimeType());
                         $set('size', $state->getSize());
                         $set('original_filename', $state->getClientOriginalName());
                     
                 })
                ->storeFiles(true)
                ->columnSpanFull(),
             TextInput::make('original_filename')
                 ->label('Оригинално име на файла')
                 ->hidden(),
             TextInput::make('mime_type')
                 ->label('Тип на файла (MIME)')
                 ->hidden(),
             TextInput::make('size')
                 ->label('Размер на файла (байтове)')
                 ->hidden()
                  ->numeric(),
             // --- КРАЙ НА ЛОГИКАТА ---
            Toggle::make('is_published')
                ->label('Публикуван')
                ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->label('Заглавие')
                ->searchable()
                ->sortable(),
            // --- ДОБАВЕНИ КОЛОНИ ---
            TextColumn::make('original_filename')
                ->label('Оригинално име')
                ->toggleable(isToggledHiddenByDefault: true) // Скрита по подразбиране
                ->searchable(),
             TextColumn::make('mime_type')
                 ->label('Тип файл')
                 ->toggleable(isToggledHiddenByDefault: true),
             TextColumn::make('size')
                 ->label('Размер')
                 ->numeric()
                 ->sortable()
                 ->formatStateUsing(fn (string $state): string => formatBytes($state)) // Форматиране на байтовете
                 ->toggleable(isToggledHiddenByDefault: true),
             TextColumn::make('uploader.name') // Използва връзката uploader() в модела Resource
                 ->label('Качен от')
                 ->searchable()
                 ->sortable()
                 ->toggleable(isToggledHiddenByDefault: true),
             IconColumn::make('is_published')
                 ->label('Публикуван')
                 ->boolean()
                 ->sortable(),
             // --- КРАЙ НА ДОБАВЕНИ КОЛОНИ ---
            TextColumn::make('created_at')
                ->label('Дата на качване')
                ->dateTime('d.m.Y H:i')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
                        
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Публикувано'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->label('Преглед'),
                Tables\Actions\EditAction::make()->label('Редакция'),
                // Действие за изтегляне директно от таблицата
                 Tables\Actions\Action::make('download')
                    ->label('Изтегли')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('primary')
                    ->action(function (Resource $record) {
                        if (!Storage::disk('public')->exists($record->file_path)) {
                             // Може да покажете нотификация за грешка
                             return;
                         }
                         return Storage::disk('public')->download($record->file_path, $record->original_filename);
                    }),
                Tables\Actions\DeleteAction::make()->label('Изтриване'),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
    
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }    
}