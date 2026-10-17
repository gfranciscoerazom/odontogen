<?php

namespace App\Enums\Patient;

use App\Trait\UseValueAsLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PatientSex: string implements HasColor, HasIcon, HasLabel
{
    use UseValueAsLabel;

    case MALE = 'male';
    case FEMALE = 'female';
    case OTHER = 'other';

    /**
     * Get the icon for the enum case.
     */
    public function getIcon(): string|\BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::MALE => 'heroicon-o-rocket-launch',
            self::FEMALE => 'heroicon-o-sparkles',
            self::OTHER => 'heroicon-o-swatch',
        };
    }

    /**
     * Get the color for the enum case.
     */
    public function getColor(): array|string|null
    {
        return match ($this) {
            self::MALE => 'info',
            self::FEMALE => 'warning',
            self::OTHER => 'gray',
        };
    }
}
