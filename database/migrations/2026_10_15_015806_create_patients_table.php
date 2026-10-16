<?php

use App\Enums\PatientSex;
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
            $table->enum('civil_status', ['single', 'married', 'divorced', 'widowed']);
            $table->date('birth_date');
            $table->string('profession', 100);
            $table->string('insurance_company', 100)->nullable();
            $table->string('id_number', 13)->unique();
            $table->enum('id_type', ['passport', 'driver_license', 'national_id'])->default('national_id');
            $table->json('allergies')->nullable();
            $table->text('patient_notes')->nullable();
            $table->json('disease_history')->nullable();
            $table->text('medications')->nullable();
            $table->json('cie10_codes')->nullable();
            $table->text('disease_notes')->nullable();
            $table->enum('salivary_glands', ['healthy', 'mild_inflammation', 'chronic_inflammation', 'light_bleeding', 'chronic_bleeding', 'injuries'])->default('healthy');
            $table->enum('mucosa', ['healthy', 'pathological', 'pre_existing_condition'])->default('healthy');
            $table->enum('palate', ['healthy', 'pathological', 'pre_existing_condition'])->default('healthy');
            $table->enum('occlusion', ['healthy', 'pathological', 'pre_existing_condition'])->default('healthy');
            $table->enum('ency', ['healthy', 'pathological', 'pre_existing_condition'])->default('healthy');
            $table->enum('tongue', ['healthy', 'pathological', 'pre_existing_condition'])->default('healthy');
            $table->enum('lips', ['healthy', 'pathological', 'pre_existing_condition'])->default('healthy');
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
