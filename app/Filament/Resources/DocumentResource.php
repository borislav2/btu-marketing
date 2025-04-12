<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Document;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Resource as ModelsResource;
use App\Filament\Resources\DocumentResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class DocumentResource extends Resource
{
    protected static ?string $model = ModelsResource::class;
    protected static ?string $navigationGroup = 'Учебни материали';
    protected static ?string $navigationLabel = 'Документи';
    protected static ?string $label = 'Документ';
    protected static ?string $pluralLabel = 'Документи';
    protected static ?string $slug = 'documents';
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
                Tables\Columns\TextColumn::make('title')->searchable()->label('Заглавие:'),
                Tables\Columns\ImageColumn::make('file_path')
                    ->disk('public')
                    ->label('Качен документ:'),
                Tables\Columns\TextColumn::make('description')->searchable()->label('Описание:'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()->label("Качен на:"),
                        
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
