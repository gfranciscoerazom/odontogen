<?php

namespace Database\Factories;

use App\Enums\Patient\PatientCivilStatus;
use App\Enums\Patient\PatientEncy;
use App\Enums\Patient\PatientIdType;
use App\Enums\Patient\PatientLips;
use App\Enums\Patient\PatientMucosa;
use App\Enums\Patient\PatientOcclusion;
use App\Enums\Patient\PatientPalate;
use App\Enums\Patient\PatientSalivaryGlands;
use App\Enums\Patient\PatientSex;
use App\Enums\Patient\PatientTongue;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'address' => fake()->regexify('[A-Za-z0-9]{255}'),
            'city' => fake()->city(),
            'sex' => fake()->randomElement(PatientSex::class),
            'civil_status' => fake()->randomElement(PatientCivilStatus::class),
            'birth_date' => fake()->date(),
            'profession' => fake()->regexify('[A-Za-z0-9]{100}'),
            'insurance_company' => fake()->company(),
            'id_number' => fake()->regexify('[A-Za-z0-9]{13}'),
            'id_type' => fake()->randomElement(PatientIdType::class),
            'allergies' => '{}',
            'patient_notes' => fake()->realText(),
            'disease_history' => '{}',
            'medications' => fake()->text(),
            'cie10_codes' => '{}',
            'disease_notes' => fake()->text(),
            'salivary_glands' => fake()->randomElement(PatientSalivaryGlands::class),
            'mucosa' => fake()->randomElement(PatientMucosa::class),
            'palate' => fake()->randomElement(PatientPalate::class),
            'occlusion' => fake()->randomElement(PatientOcclusion::class),
            'ency' => fake()->randomElement(PatientEncy::class),
            'tongue' => fake()->randomElement(PatientTongue::class),
            'lips' => fake()->randomElement(PatientLips::class),
            'oral_diseases' => '{}',
            'oral_deseases_notes' => fake()->text(),
        ];
    }
}
