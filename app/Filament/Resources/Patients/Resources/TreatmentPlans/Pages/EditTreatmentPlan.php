<?php

namespace App\Filament\Resources\Patients\Resources\TreatmentPlans\Pages;

use App\Filament\Resources\Patients\Resources\TreatmentPlans\TreatmentPlanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTreatmentPlan extends EditRecord
{
    protected static string $resource = TreatmentPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
