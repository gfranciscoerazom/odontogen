<?php

namespace App\Filament\Resources\Patients\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PatientInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('first_name'),
                TextEntry::make('last_name'),
                TextEntry::make('phone'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('address'),
                TextEntry::make('city'),
                TextEntry::make('sex')->badge(),
                TextEntry::make('civil_status')->badge(),
                TextEntry::make('birth_date')
                    ->date(),
                TextEntry::make('profession'),
                TextEntry::make('insurance_company')
                    ->placeholder('-'),
                TextEntry::make('id_number'),
                TextEntry::make('id_type')->badge(),
                TextEntry::make('allergies')
                    ->placeholder('-')
                    ->columnSpanFull()
                    ->badge(),
                TextEntry::make('patient_notes')
                    ->placeholder('-')
                    ->columnSpanFull()
                    ->prose(),
                TextEntry::make('disease_history')
                    ->placeholder('-')
                    ->columnSpanFull()
                    ->badge(),
                TextEntry::make('medications')
                    ->placeholder('-')
                    ->columnSpanFull()
                    ->prose(),
                TextEntry::make('cie10_codes')
                    ->placeholder('-')
                    ->columnSpanFull()
                    ->badge(),
                TextEntry::make('disease_notes')
                    ->placeholder('-')
                    ->columnSpanFull()
                    ->prose(),
                TextEntry::make('salivary_glands')->badge(),
                TextEntry::make('mucosa')->badge(),
                TextEntry::make('palate')->badge(),
                TextEntry::make('occlusion')->badge(),
                TextEntry::make('ency')->badge(),
                TextEntry::make('tongue')->badge(),
                TextEntry::make('lips')->badge(),
                TextEntry::make('oral_diseases')
                    ->placeholder('-')
                    ->columnSpanFull()
                    ->badge(),
                TextEntry::make('oral_deseases_notes')
                    ->placeholder('-')
                    ->columnSpanFull()
                    ->prose(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
