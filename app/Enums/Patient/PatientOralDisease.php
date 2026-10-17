<?php

namespace App\Enums\Patient;

use App\Trait\UseValueAsLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PatientOralDisease: string implements HasColor, HasIcon, HasLabel
{
    use UseValueAsLabel;

    case DENTAL_CARIES = 'dental_caries';
    case GINGIVITIS = 'gingivitis';
    case PERIODONTITIS = 'periodontitis';
    case ORAL_LICHEN_PLANUS = 'oral_lichen_planus';
    case HALITOSIS = 'halitosis';
    case ORAL_LEUKOPLAKIA = 'oral_leukoplakia';
    case ORAL_ULCERS = 'oral_ulcers';
    case ORAL_CANDIDIASIS = 'oral_candidiasis';
    case DENTAL_ABSCESS = 'dental_abscess';
    case ORAL_CYSTS = 'oral_cysts';

    /**
     * Get the icon for the enum case.
     */
    public function getIcon(): string|\BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::DENTAL_CARIES => 'heroicon-o-wrench',
            self::GINGIVITIS => 'heroicon-o-exclamation-circle',
            self::PERIODONTITIS => 'heroicon-o-shield-exclamation',
            self::ORAL_LICHEN_PLANUS => 'heroicon-o-swatch',
            self::HALITOSIS => 'heroicon-o-face-frown',
            self::ORAL_LEUKOPLAKIA => 'heroicon-o-document-magnifying-glass',
            self::ORAL_ULCERS => 'heroicon-o-fire',
            self::ORAL_CANDIDIASIS => 'heroicon-o-beaker',
            self::DENTAL_ABSCESS => 'heroicon-o-bell-alert',
            self::ORAL_CYSTS => 'heroicon-o-circle-stack',
        };
    }

    /**
     * Get the color for the enum case.
     */
    public function getColor(): array|string|null
    {
        return match ($this) {
            self::DENTAL_CARIES => 'warning',
            self::GINGIVITIS => 'info',
            self::PERIODONTITIS => 'danger',
            self::ORAL_LICHEN_PLANUS => 'danger',
            self::HALITOSIS => 'info',
            self::ORAL_LEUKOPLAKIA => 'danger',
            self::ORAL_ULCERS => 'warning',
            self::ORAL_CANDIDIASIS => 'warning',
            self::DENTAL_ABSCESS => 'danger',
            self::ORAL_CYSTS => 'warning',
        };
    }
}
