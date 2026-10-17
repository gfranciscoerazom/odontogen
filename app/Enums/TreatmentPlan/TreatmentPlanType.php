<?php

namespace App\Enums\TreatmentPlan;

use App\Trait\UseValueAsLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum TreatmentPlanType: string implements HasColor, HasIcon, HasLabel
{
    use UseValueAsLabel;

    case PREVENTIVE = 'preventive';
    case RESTORATIVE = 'restorative';
    case ENDODONTIC = 'endodontic';
    case PERIODONTAL = 'periodontal';
    case PROSTHETIC = 'prosthetic';
    case SURGICAL = 'surgical';
    case ORTHODONTIC = 'orthodontic';
    case OTHER = 'other';

    /**
     * Get the icon for the enum case.
     */
    public function getIcon(): string|\BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::PREVENTIVE => 'heroicon-o-shield-check',
            self::RESTORATIVE => 'heroicon-o-sparkles',
            self::ENDODONTIC => 'heroicon-o-beaker',
            self::PERIODONTAL => 'heroicon-o-heart',
            self::PROSTHETIC => 'heroicon-o-star',
            self::SURGICAL => 'heroicon-o-plus-circle',
            self::ORTHODONTIC => 'heroicon-o-sun',
            self::OTHER => 'heroicon-o-question-mark-circle',
        };
    }

    /**
     * Get the color for the enum case.
     */
    public function getColor(): array|string|null
    {
        return match ($this) {
            self::PREVENTIVE => 'success',
            self::RESTORATIVE => 'info',
            self::ENDODONTIC => 'warning',
            self::PERIODONTAL => 'danger',
            self::PROSTHETIC => 'primary',
            self::SURGICAL => 'warning',
            self::ORTHODONTIC => 'info',
            self::OTHER => 'gray',
        };
    }
}
