<?php

namespace App\Filament\Resources\Patients\Resources\TreatmentPlans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TreatmentPlansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')
                    ->date(),
                TextColumn::make('appointment')
                    ->dateTime(),
                TextColumn::make('type')
                    ->badge(),
                TextColumn::make('notes')
                    ->formatStateUsing(fn (?string $state): ?string => filled($state) ? str($state)->stripTags()->squish()->toString() : null)
                    ->limit(50),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
