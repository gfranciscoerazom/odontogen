<?php

namespace App\Enums\Patient;

use App\Trait\UseValueAsLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PatientIdType: string implements HasColor, HasIcon, HasLabel
{
    use UseValueAsLabel;

    case PASSPORT = 'passport';
    case DRIVER_LICENSE = 'driver_license';
    case NATIONAL_ID = 'national_id';

    /**
     * Get the icon for the enum case.
     */
    public function getIcon(): string|\BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::PASSPORT => 'heroicon-o-book-open',
            self::DRIVER_LICENSE => 'heroicon-o-credit-card',
            self::NATIONAL_ID => 'heroicon-o-identification',
        };
    }

    /**
     * Get the color for the enum case.
     */
    public function getColor(): array|string|null
    {
        return match ($this) {
            self::PASSPORT => 'blue',
            self::DRIVER_LICENSE => 'amber',
            self::NATIONAL_ID => 'gray',
        };
    }
}
