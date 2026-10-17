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

    case NATIONAL_ID = 'national_id';
    case PASSPORT = 'passport';
    case DRIVER_LICENSE = 'driver_license';

    /**
     * Get the icon for the enum case.
     */
    public function getIcon(): string|\BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::NATIONAL_ID => 'heroicon-o-identification',
            self::PASSPORT => 'heroicon-o-book-open',
            self::DRIVER_LICENSE => 'heroicon-o-credit-card',
        };
    }

    /**
     * Get the color for the enum case.
     */
    public function getColor(): array|string|null
    {
        return match ($this) {
            self::NATIONAL_ID => 'primary',
            self::PASSPORT => 'success',
            self::DRIVER_LICENSE => 'info',
        };
    }
}
