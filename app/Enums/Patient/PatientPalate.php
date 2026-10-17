<?php

namespace App\Enums\Patient;

use App\Trait\UseValueAsLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PatientPalate: string implements HasColor, HasIcon, HasLabel
{
    use UseValueAsLabel;

    case HEALTHY = 'healthy';
    case PATHOLOGICAL = 'pathological';
    case PRE_EXISTING_CONDITION = 'pre_existing_condition';

    /**
     * Get the icon for the enum case.
     */
    public function getIcon(): string|\BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::HEALTHY => 'heroicon-o-check-circle',
            self::PATHOLOGICAL => 'heroicon-o-x-circle',
            self::PRE_EXISTING_CONDITION => 'heroicon-o-information-circle',
        };
    }

    /**
     * Get the color for the enum case.
     */
    public function getColor(): array|string|null
    {
        return match ($this) {
            self::HEALTHY => 'success',
            self::PATHOLOGICAL => 'danger',
            self::PRE_EXISTING_CONDITION => 'warning',
        };
    }
}
