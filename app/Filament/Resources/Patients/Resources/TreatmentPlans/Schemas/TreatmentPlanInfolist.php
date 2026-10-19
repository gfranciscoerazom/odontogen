<?php

namespace App\Filament\Resources\Patients\Resources\TreatmentPlans\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TreatmentPlanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('date')
                    ->placeholder('-')
                    ->date(),
                TextEntry::make('appointment')
                    ->placeholder('-')
                    ->dateTime(),
                TextEntry::make('type')
                    ->badge(),
                TextEntry::make('notes')
                    ->placeholder('-')
                    ->columnSpanFull()
                    ->prose(),
                TextEntry::make('created_at')
                    ->placeholder('-')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->placeholder('-')
                    ->dateTime(),
            ]);
    }
}
