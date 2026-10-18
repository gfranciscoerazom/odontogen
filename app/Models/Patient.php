<?php

namespace App\Models;

use App\Enums\Patient\PatientAllergy;
use App\Enums\Patient\PatientCie10Code;
use App\Enums\Patient\PatientCivilStatus;
use App\Enums\Patient\PatientDiseaseHistory;
use App\Enums\Patient\PatientEncy;
use App\Enums\Patient\PatientIdType;
use App\Enums\Patient\PatientLips;
use App\Enums\Patient\PatientMucosa;
use App\Enums\Patient\PatientOcclusion;
use App\Enums\Patient\PatientOralDisease;
use App\Enums\Patient\PatientPalate;
use App\Enums\Patient\PatientSalivaryGlands;
use App\Enums\Patient\PatientSex;
use App\Enums\Patient\PatientTongue;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\AsEnumCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'first_name',
    'last_name',
    'phone',
    'email',
    'address',
    'city',
    'sex',
    'civil_status',
    'birth_date',
    'profession',
    'insurance_company',
    'id_number',
    'id_type',
    'allergies',
    'patient_notes',
    'disease_history',
    'medications',
    'cie10_codes',
    'disease_notes',
    'salivary_glands',
    'mucosa',
    'palate',
    'occlusion',
    'ency',
    'tongue',
    'lips',
    'oral_diseases',
    'oral_deseases_notes',
])]
class Patient extends Model
{
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'birth_date' => 'date',
            'sex' => PatientSex::class,
            'civil_status' => PatientCivilStatus::class,
            'id_type' => PatientIdType::class,
            'allergies' => AsEnumCollection::of(PatientAllergy::class),
            'disease_history' => AsEnumCollection::of(PatientDiseaseHistory::class),
            'cie10_codes' => AsEnumCollection::of(PatientCie10Code::class),
            'salivary_glands' => PatientSalivaryGlands::class,
            'mucosa' => PatientMucosa::class,
            'palate' => PatientPalate::class,
            'occlusion' => PatientOcclusion::class,
            'ency' => PatientEncy::class,
            'tongue' => PatientTongue::class,
            'lips' => PatientLips::class,
            'oral_diseases' => AsEnumCollection::of(PatientOralDisease::class),
        ];
    }

    public function treatmentPlans(): HasMany
    {
        return $this->hasMany(TreatmentPlan::class);
    }
}
