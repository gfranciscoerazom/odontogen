<?php

namespace App\Filament\Resources\Patients\Schemas;

use App\Enums\Patient\PatientAllergy;
use App\Enums\Patient\PatientCie10Code;
use App\Enums\Patient\PatientCivilStatus;
use App\Enums\Patient\PatientDiseaseHistory;
use App\Enums\Patient\PatientEncy;
use App\Enums\Patient\PatientIdType;
use App\Enums\Patient\PatientLips;
use App\Enums\Patient\PatientMucosa;
use App\Enums\Patient\PatientOcclusion;
use App\Enums\Patient\PatientOralDisease;
use App\Enums\Patient\PatientPalate;
use App\Enums\Patient\PatientSalivaryGlands;
use App\Enums\Patient\PatientSex;
use App\Enums\Patient\PatientTongue;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class PatientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    Step::make('Personal Information')
                        ->description('Basic patient details, contact information and general data.')
                        ->columns(2)
                        ->schema([
                            TextInput::make('first_name')
                                ->required(),
                            TextInput::make('last_name')
                                ->required(),
                            TextInput::make('phone')
                                ->tel()
                                ->required(),
                            TextInput::make('email')
                                ->label('Email address')
                                ->email()
                                ->required(),
                            TextInput::make('address')
                                ->required(),
                            TextInput::make('city')
                                ->required(),
                            ToggleButtons::make('sex')
                                ->required()
                                ->options(PatientSex::class),
                            ToggleButtons::make('civil_status')
                                ->required()
                                ->options(PatientCivilStatus::class),
                            DatePicker::make('birth_date')
                                ->required()
                                ->native(false)
                                ->suffixIcon(Heroicon::Calendar),
                            TextInput::make('profession')
                                ->required(),
                            TextInput::make('insurance_company'),
                            TextInput::make('id_number')
                                ->required(),
                            ToggleButtons::make('id_type')
                                ->required()
                                ->options(PatientIdType::class)
                                ->default(PatientIdType::NATIONAL_ID),
                            Select::make('allergies')
                                ->required()
                                ->multiple()
                                ->options(PatientAllergy::class),
                            RichEditor::make('patient_notes')
                                ->columnSpanFull(),
                        ]),
                    Step::make('Medical History')
                        ->description('Relevant medical background, current medications and diagnoses.')
                        ->columns(2)
                        ->schema([
                            Select::make('disease_history')
                                ->required()
                                ->multiple()
                                ->options(PatientDiseaseHistory::class)
                                ->columnSpanFull(),
                            RichEditor::make('medications')
                                ->columnSpanFull(),
                            Select::make('cie10_codes')
                                ->required()
                                ->multiple()
                                ->options(PatientCie10Code::class),
                            RichEditor::make('disease_notes')
                                ->columnSpanFull(),
                        ]),
                    Step::make('Oral Examination')
                        ->description('Findings from the oral and maxillofacial examination.')
                        ->columns(2)
                        ->schema([
                            ToggleButtons::make('salivary_glands')
                                ->required()
                                ->options(PatientSalivaryGlands::class)
                                ->default(PatientSalivaryGlands::HEALTHY),
                            ToggleButtons::make('mucosa')
                                ->required()
                                ->options(PatientMucosa::class)
                                ->default(PatientMucosa::HEALTHY),
                            ToggleButtons::make('palate')
                                ->required()
                                ->options(PatientPalate::class)
                                ->default(PatientPalate::HEALTHY),
                            ToggleButtons::make('occlusion')
                                ->required()
                                ->options(PatientOcclusion::class)
                                ->default(PatientOcclusion::HEALTHY),
                            ToggleButtons::make('ency')
                                ->required()
                                ->options(PatientEncy::class)
                                ->default(PatientEncy::HEALTHY),
                            ToggleButtons::make('tongue')
                                ->required()
                                ->options(PatientTongue::class)
                                ->default(PatientTongue::HEALTHY),
                            ToggleButtons::make('lips')
                                ->required()
                                ->options(PatientLips::class)
                                ->default(PatientLips::HEALTHY),
                            Select::make('oral_diseases')
                                ->required()
                                ->multiple()
                                ->options(PatientOralDisease::class)
                                ->columnSpanFull(),
                            RichEditor::make('oral_deseases_notes')
                                ->columnSpanFull(),
                        ]),
                ]),
            ]);
    }
}
