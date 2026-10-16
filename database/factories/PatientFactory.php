<?php

namespace Database\Factories;

use App\Enums\PatientSex;
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
            'civil_status' => fake()->randomElement(['single', 'married', 'divorced', 'widowed']),
            'birth_date' => fake()->date(),
            'profession' => fake()->regexify('[A-Za-z0-9]{100}'),
            'insurance_company' => fake()->company(),
            'id_number' => fake()->regexify('[A-Za-z0-9]{13}'),
            'id_type' => fake()->randomElement(['passport', 'driver_license', 'national_id']),
            'allergies' => '{}',
            'patient_notes' => fake()->realText(),
            'disease_history' => '{}',
            'medications' => fake()->text(),
            'cie10_codes' => '{}',
            'disease_notes' => fake()->text(),
            'salivary_glands' => fake()->randomElement(['healthy', 'mild_inflammation', 'chronic_inflammation', 'light_bleeding', 'chronic_bleeding', 'injuries']),
            'mucosa' => fake()->randomElement(['healthy', 'pathological', 'pre_existing_condition']),
            'palate' => fake()->randomElement(['healthy', 'pathological', 'pre_existing_condition']),
            'occlusion' => fake()->randomElement(['healthy', 'pathological', 'pre_existing_condition']),
            'ency' => fake()->randomElement(['healthy', 'pathological', 'pre_existing_condition']),
            'tongue' => fake()->randomElement(['healthy', 'pathological', 'pre_existing_condition']),
            'lips' => fake()->randomElement(['healthy', 'pathological', 'pre_existing_condition']),
            'oral_diseases' => '{}',
            'oral_deseases_notes' => fake()->text(),
        ];
    }
}
