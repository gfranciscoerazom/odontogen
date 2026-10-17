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
                TextEntry::make('sex'),
                TextEntry::make('civil_status'),
                TextEntry::make('birth_date')
                    ->date(),
                TextEntry::make('profession'),
                TextEntry::make('insurance_company')
                    ->placeholder('-'),
                TextEntry::make('id_number'),
                TextEntry::make('id_type'),
                TextEntry::make('allergies')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('patient_notes')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('disease_history')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('medications')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('cie10_codes')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('disease_notes')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('salivary_glands'),
                TextEntry::make('mucosa'),
                TextEntry::make('palate'),
                TextEntry::make('occlusion'),
                TextEntry::make('ency'),
                TextEntry::make('tongue'),
                TextEntry::make('lips'),
                TextEntry::make('oral_diseases')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('oral_deseases_notes')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
