<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class TreatmentPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'patient_id' => Patient::factory(),
            'date' => fake()->date(),
            'appointment' => fake()->dateTime(),
            'type' => fake()->randomElement(['preventive', 'restorative', 'endodontic', 'periodontal', 'prosthetic', 'surgical', 'orthodontic', 'other']),
            'notes' => fake()->realText(),
        ];
    }
}
