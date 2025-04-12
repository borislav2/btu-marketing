<?php

namespace App\Filament\Teacher\Resources\DocumentResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Auth;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\DocumentResource;

class CreateDocument extends CreateRecord
{
    protected static string $resource = DocumentResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['uploaded_by_user_id'] = Auth::id();
        // mime_type и size вече трябва да са в $data заради afterStateUpdated в FileUpload
        return $data;
    }

     protected function getRedirectUrl(): string
     {
         return $this->getResource()::getUrl('index');
     }

      public function getTitle(): string { return 'Създай Ресурс'; }
}
