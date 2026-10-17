<?php

namespace App\Enums\Patient;

use App\Trait\UseValueAsLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PatientCie10Code: string implements HasColor, HasIcon, HasLabel
{
    use UseValueAsLabel;

    case K02_9 = 'K02.9 Dental caries, unspecified';
    case K05_1 = 'K05.1 Chronic gingivitis';
    case K11_1 = 'K11.1 Dentine hypersensitivity';
    case K12_1 = 'K12.1 Aphthous stomatitis';
    case K02_3 = 'K02.3 Carious lesions of enamel';
    case K06_0 = 'K06.0 Asymmetry of occlusion';
    case K02_1 = 'K02.1 Caries of dentine';
    case K04_5 = 'K04.5 Pericoronitis';
    case K10_1 = 'K10.1 Oral pain';
    case K07_6 = 'K07.6 Acquired dentofacial anomalies';

    /**
     * Get the icon for the enum case.
     */
    public function getIcon(): string|\BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::K02_9 => 'heroicon-o-wrench',
            self::K05_1 => 'heroicon-o-fire',
            self::K11_1 => 'heroicon-o-bolt',
            self::K12_1 => 'heroicon-o-face-frown',
            self::K02_3 => 'heroicon-o-swatch',
            self::K06_0 => 'heroicon-o-magnifying-glass',
            self::K02_1 => 'heroicon-o-wrench-screwdriver',
            self::K04_5 => 'heroicon-o-bell-alert',
            self::K10_1 => 'heroicon-o-exclamation-circle',
            self::K07_6 => 'heroicon-o-puzzle-piece',
        };
    }

    /**
     * Get the color for the enum case.
     */
    public function getColor(): array|string|null
    {
        return match ($this) {
            self::K02_9 => 'warning',
            self::K05_1 => 'warning',
            self::K11_1 => 'info',
            self::K12_1 => 'warning',
            self::K02_3 => 'info',
            self::K06_0 => 'info',
            self::K02_1 => 'warning',
            self::K04_5 => 'danger',
            self::K10_1 => 'warning',
            self::K07_6 => 'info',
        };
    }
}
