<?php

namespace App\Enums\Patient;

use App\Trait\UseValueAsLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PatientSalivaryGlands: string implements HasColor, HasIcon, HasLabel
{
    use UseValueAsLabel;

    case HEALTHY = 'healthy';
    case MILD_INFLAMMATION = 'mild_inflammation';
    case CHRONIC_INFLAMMATION = 'chronic_inflammation';
    case LIGHT_BLEEDING = 'light_bleeding';
    case CHRONIC_BLEEDING = 'chronic_bleeding';
    case INJURIES = 'injuries';

    /**
     * Get the icon for the enum case.
     */
    public function getIcon(): string|\BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::HEALTHY => 'heroicon-o-check-circle',
            self::MILD_INFLAMMATION => 'heroicon-o-exclamation-circle',
            self::CHRONIC_INFLAMMATION => 'heroicon-o-fire',
            self::LIGHT_BLEEDING => 'heroicon-o-beaker',
            self::CHRONIC_BLEEDING => 'heroicon-o-heart',
            self::INJURIES => 'heroicon-o-x-circle',
        };
    }

    /**
     * Get the color for the enum case.
     */
    public function getColor(): array|string|null
    {
        return match ($this) {
            self::HEALTHY => 'green',
            self::MILD_INFLAMMATION => 'yellow',
            self::CHRONIC_INFLAMMATION => 'amber',
            self::LIGHT_BLEEDING => 'orange',
            self::CHRONIC_BLEEDING => 'red',
            self::INJURIES => 'rose',
        };
    }
}
