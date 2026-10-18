<?php

namespace App\Filament\Resources\VisaSuccessResource\Pages;

use App\Filament\Resources\VisaSuccessResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisaSuccesses extends ListRecords
{
    protected static string $resource = VisaSuccessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
