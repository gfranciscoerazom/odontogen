<?php

namespace App\Filament\Resources\Patients\Resources\TreatmentPlans\Pages;

use App\Filament\Resources\Patients\Resources\TreatmentPlans\TreatmentPlanResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTreatmentPlan extends CreateRecord
{
    protected static string $resource = TreatmentPlanResource::class;
}
