<?php

namespace App\Filament\Resources\Patients\RelationManagers;

use App\Filament\Resources\Patients\Resources\TreatmentPlans\TreatmentPlanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class TreatmentPlansRelationManager extends RelationManager
{
    protected static string $relationship = 'treatmentPlans';

    protected static ?string $relatedResource = TreatmentPlanResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
