<?php

namespace App\Enums\Patient;

use App\Trait\UseValueAsLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PatientDiseaseHistory: string implements HasColor, HasIcon, HasLabel
{
    use UseValueAsLabel;

    case TYPE_2_DIABETES = 'type_2_diabetes';
    case ARTERIAL_HYPERTENSION = 'arterial_hypertension';
    case PERIODONTAL_DISEASE = 'periodontal_disease';
    case RECURRENT_CARIES = 'recurrent_caries';
    case SJOGREN_SYNDROME = 'sjogren_syndrome';
    case OSTEOPOROSIS = 'osteoporosis';
    case SLEEP_APNEA_SYNDROME = 'sleep_apnea_syndrome';
    case TMJ_DISORDERS = 'tmj_disorders';
    case CHRONIC_GINGIVITIS = 'chronic_gingivitis';
    case RECURRENT_ORAL_LESIONS = 'recurrent_oral_lesions';

    /**
     * Get the icon for the enum case.
     */
    public function getIcon(): string|\BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::TYPE_2_DIABETES => 'heroicon-o-beaker',
            self::ARTERIAL_HYPERTENSION => 'heroicon-o-arrow-trending-up',
            self::PERIODONTAL_DISEASE => 'heroicon-o-fire',
            self::RECURRENT_CARIES => 'heroicon-o-arrow-path',
            self::SJOGREN_SYNDROME => 'heroicon-o-face-frown',
            self::OSTEOPOROSIS => 'heroicon-o-exclamation-triangle',
            self::SLEEP_APNEA_SYNDROME => 'heroicon-o-moon',
            self::TMJ_DISORDERS => 'heroicon-o-cog-6-tooth',
            self::CHRONIC_GINGIVITIS => 'heroicon-o-exclamation-circle',
            self::RECURRENT_ORAL_LESIONS => 'heroicon-o-magnifying-glass',
        };
    }

    /**
     * Get the color for the enum case.
     */
    public function getColor(): array|string|null
    {
        return match ($this) {
            self::TYPE_2_DIABETES => 'danger',
            self::ARTERIAL_HYPERTENSION => 'warning',
            self::PERIODONTAL_DISEASE => 'warning',
            self::RECURRENT_CARIES => 'warning',
            self::SJOGREN_SYNDROME => 'warning',
            self::OSTEOPOROSIS => 'danger',
            self::SLEEP_APNEA_SYNDROME => 'info',
            self::TMJ_DISORDERS => 'warning',
            self::CHRONIC_GINGIVITIS => 'warning',
            self::RECURRENT_ORAL_LESIONS => 'info',
        };
    }
}
