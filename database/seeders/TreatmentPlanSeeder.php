<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\TreatmentPlan;
use Illuminate\Database\Seeder;

class TreatmentPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patients = Patient::factory(5)->create();

        TreatmentPlan::factory(10)->recycle($patients)->create();
    }
}
