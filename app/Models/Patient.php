<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'first_name',
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
            'allergies' => 'array',
            'disease_history' => 'array',
            'cie10_codes' => 'array',
            'oral_diseases' => 'array',
        ];
    }

    public function treatmentPlans(): HasMany
    {
        return $this->hasMany(TreatmentPlan::class);
    }
}
