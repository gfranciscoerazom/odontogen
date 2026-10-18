<?php

namespace App\Filament\Resources\Patients\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PatientsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                    ->searchable(),
                TextColumn::make('last_name')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('address')
                    ->searchable(),
                TextColumn::make('city')
                    ->searchable(),
                TextColumn::make('sex')
                    ->badge()
                    ->searchable(),
                TextColumn::make('civil_status')
                    ->badge()
                    ->searchable(),
                TextColumn::make('birth_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('profession')
                    ->searchable(),
                TextColumn::make('insurance_company')
                    ->searchable(),
                TextColumn::make('id_number')
                    ->searchable(),
                TextColumn::make('id_type')
                    ->badge()
                    ->searchable(),
                TextColumn::make('allergies')
                    ->badge()
                    ->searchable(),
                TextColumn::make('disease_history')
                    ->badge()
                    ->searchable(),
                TextColumn::make('cie10_codes')
                    ->badge()
                    ->searchable(),
                TextColumn::make('salivary_glands')
                    ->badge()
                    ->searchable(),
                TextColumn::make('mucosa')
                    ->badge()
                    ->searchable(),
                TextColumn::make('palate')
                    ->badge()
                    ->searchable(),
                TextColumn::make('occlusion')
                    ->badge()
                    ->searchable(),
                TextColumn::make('ency')
                    ->badge()
                    ->searchable(),
                TextColumn::make('tongue')
                    ->badge()
                    ->searchable(),
                TextColumn::make('lips')
                    ->badge()
                    ->searchable(),
                TextColumn::make('oral_diseases')
                    ->badge()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
