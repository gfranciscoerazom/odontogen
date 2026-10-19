<?php

namespace App\Filament\Resources\Patients\Resources\TreatmentPlans;

use App\Filament\Resources\Patients\PatientResource;
use App\Filament\Resources\Patients\Resources\TreatmentPlans\Pages\CreateTreatmentPlan;
use App\Filament\Resources\Patients\Resources\TreatmentPlans\Pages\EditTreatmentPlan;
use App\Filament\Resources\Patients\Resources\TreatmentPlans\Pages\ViewTreatmentPlan;
use App\Filament\Resources\Patients\Resources\TreatmentPlans\Schemas\TreatmentPlanForm;
use App\Filament\Resources\Patients\Resources\TreatmentPlans\Schemas\TreatmentPlanInfolist;
use App\Filament\Resources\Patients\Resources\TreatmentPlans\Tables\TreatmentPlansTable;
use App\Models\TreatmentPlan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TreatmentPlanResource extends Resource
{
    protected static ?string $model = TreatmentPlan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $parentResource = PatientResource::class;

    public static function form(Schema $schema): Schema
    {
        return TreatmentPlanForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TreatmentPlanInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TreatmentPlansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'create' => CreateTreatmentPlan::route('/create'),
            'view' => ViewTreatmentPlan::route('/{record}'),
            'edit' => EditTreatmentPlan::route('/{record}/edit'),
        ];
    }
}
