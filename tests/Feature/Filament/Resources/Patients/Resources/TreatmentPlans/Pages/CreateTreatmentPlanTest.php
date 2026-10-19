<?php

use App\Enums\TreatmentPlan\TreatmentPlanType;
use App\Filament\Resources\Patients\Resources\TreatmentPlans\Pages\CreateTreatmentPlan;
use App\Models\Patient;
use App\Models\User;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

it('creates the treatment plan attached to the parent patient', function () {
    $patient = Patient::factory()->create();

    Livewire::test(CreateTreatmentPlan::class, [
        'parentRecord' => $patient,
    ])
        ->fillForm([
            'date' => '2026-10-18',
            'type' => TreatmentPlanType::PREVENTIVE->value,
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $this->assertDatabaseHas('treatment_plans', [
        'patient_id' => $patient->getKey(),
        'type' => TreatmentPlanType::PREVENTIVE->value,
    ]);
});
