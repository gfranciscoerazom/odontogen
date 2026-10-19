<?php

use App\Enums\TreatmentPlan\TreatmentPlanType;
use App\Filament\Resources\Patients\Pages\EditPatient;
use App\Filament\Resources\Patients\RelationManagers\TreatmentPlansRelationManager;
use App\Models\Patient;
use App\Models\TreatmentPlan;
use App\Models\User;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

it('lists only the treatment plans of the patient', function () {
    $patient = Patient::factory()->create();
    $otherPatient = Patient::factory()->create();
    $treatmentPlan = TreatmentPlan::factory()->for($patient)->create();
    $otherTreatmentPlan = TreatmentPlan::factory()->for($otherPatient)->create();

    Livewire::test(TreatmentPlansRelationManager::class, [
        'ownerRecord' => $patient,
        'pageClass' => EditPatient::class,
    ])
        ->assertOk()
        ->assertCountTableRecords(1)
        ->assertCanSeeTableRecords([$treatmentPlan])
        ->assertCanNotSeeTableRecords([$otherTreatmentPlan]);
});

it('formats the type column with the label of the treatment plan type', function () {
    $patient = Patient::factory()->create();
    $treatmentPlan = TreatmentPlan::factory()->for($patient)->create([
        'type' => TreatmentPlanType::PREVENTIVE,
    ]);

    Livewire::test(TreatmentPlansRelationManager::class, [
        'ownerRecord' => $patient,
        'pageClass' => EditPatient::class,
    ])
        ->assertTableColumnFormattedStateSet('type', 'Preventive', $treatmentPlan);
});
