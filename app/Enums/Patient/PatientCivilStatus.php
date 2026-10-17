<?php

namespace App\Enums\Patient;

use App\Trait\UseValueAsLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PatientCivilStatus: string implements HasColor, HasIcon, HasLabel
{
    use UseValueAsLabel;

    case SINGLE = 'single';
    case MARRIED = 'married';
    case DIVORCED = 'divorced';
    case WIDOWED = 'widowed';

    /**
     * Get the icon for the enum case.
     */
    public function getIcon(): string|\BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::SINGLE => 'heroicon-o-user',
            self::MARRIED => 'heroicon-o-heart',
            self::DIVORCED => 'heroicon-o-user-minus',
            self::WIDOWED => 'heroicon-o-moon',
        };
    }

    /**
     * Get the color for the enum case.
     */
    public function getColor(): array|string|null
    {
        return match ($this) {
            self::SINGLE => 'primary',
            self::MARRIED => 'success',
            self::DIVORCED => 'danger',
            self::WIDOWED => 'gray',
        };
    }
}
