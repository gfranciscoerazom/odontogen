<?php

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
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('phone', 13);
            $table->string('email', 100);
            $table->string('address', 255);
            $table->string('city', 50);
            $table->enum('sex', PatientSex::cases());
            $table->enum('civil_status', PatientCivilStatus::cases());
            $table->date('birth_date');
            $table->string('profession', 100);
            $table->string('insurance_company', 100)->nullable();
            $table->string('id_number', 13)->unique();
            $table->enum('id_type', PatientIdType::cases())->default(PatientIdType::NATIONAL_ID);
            $table->json('allergies')->nullable();
            $table->text('patient_notes')->nullable();
            $table->json('disease_history')->nullable();
            $table->text('medications')->nullable();
            $table->json('cie10_codes')->nullable();
            $table->text('disease_notes')->nullable();
            $table->enum('salivary_glands', PatientSalivaryGlands::cases())->default(PatientSalivaryGlands::HEALTHY);
            $table->enum('mucosa', PatientMucosa::cases())->default(PatientMucosa::HEALTHY);
            $table->enum('palate', PatientPalate::cases())->default(PatientPalate::HEALTHY);
            $table->enum('occlusion', PatientOcclusion::cases())->default(PatientOcclusion::HEALTHY);
            $table->enum('ency', PatientEncy::cases())->default(PatientEncy::HEALTHY);
            $table->enum('tongue', PatientTongue::cases())->default(PatientTongue::HEALTHY);
            $table->enum('lips', PatientLips::cases())->default(PatientLips::HEALTHY);
            $table->json('oral_diseases')->nullable();
            $table->text('oral_deseases_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
