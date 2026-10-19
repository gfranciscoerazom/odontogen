<?php

namespace App\Filament\Resources\Patients\Resources\TreatmentPlans\Schemas;

use App\Enums\TreatmentPlan\TreatmentPlanType;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class TreatmentPlanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->required()
                    ->native(false)
                    ->suffixIcon(Heroicon::Calendar),
                DateTimePicker::make('appointment')
                    ->native(false)
                    ->suffixIcon(Heroicon::Clock),
                Select::make('type')
                    ->required()
                    ->options(TreatmentPlanType::class),
                RichEditor::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
