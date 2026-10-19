<?php

namespace App\Filament\Resources\Patients\Resources\TreatmentPlans\Pages;

use App\Filament\Resources\Patients\Resources\TreatmentPlans\TreatmentPlanResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTreatmentPlan extends ViewRecord
{
    protected static string $resource = TreatmentPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
