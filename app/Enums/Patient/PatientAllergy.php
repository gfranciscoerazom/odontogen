<?php

namespace App\Enums\Patient;

use App\Trait\UseValueAsLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PatientAllergy: string implements HasColor, HasIcon, HasLabel
{
    use UseValueAsLabel;

    case PENICILLIN = 'penicillin';
    case LATEX = 'latex';
    case AMOXICILLIN = 'amoxicillin';
    case NUTS = 'nuts';
    case DUST = 'dust';
    case IBUPROFEN = 'ibuprofen';
    case SHELLFISH = 'shellfish';
    case ASPIRIN = 'aspirin';
    case POLLEN = 'pollen';
    case SULFITES = 'sulfites';

    /**
     * Get the icon for the enum case.
     */
    public function getIcon(): string|\BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::PENICILLIN => 'heroicon-o-beaker',
            self::LATEX => 'heroicon-o-lifebuoy',
            self::AMOXICILLIN => 'heroicon-o-clipboard-document-list',
            self::NUTS => 'heroicon-o-cake',
            self::DUST => 'heroicon-o-sparkles',
            self::IBUPROFEN => 'heroicon-o-bolt',
            self::SHELLFISH => 'heroicon-o-globe-americas',
            self::ASPIRIN => 'heroicon-o-heart',
            self::POLLEN => 'heroicon-o-sun',
            self::SULFITES => 'heroicon-o-no-symbol',
        };
    }

    /**
     * Get the color for the enum case.
     */
    public function getColor(): array|string|null
    {
        return match ($this) {
            self::PENICILLIN => 'danger',
            self::LATEX => 'warning',
            self::AMOXICILLIN => 'danger',
            self::NUTS => 'danger',
            self::DUST => 'info',
            self::IBUPROFEN => 'warning',
            self::SHELLFISH => 'danger',
            self::ASPIRIN => 'warning',
            self::POLLEN => 'info',
            self::SULFITES => 'info',
        };
    }
}
