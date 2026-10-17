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
                    ->searchable(),
                TextColumn::make('civil_status')
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
                    ->searchable(),
                TextColumn::make('salivary_glands')
                    ->searchable(),
                TextColumn::make('mucosa')
                    ->searchable(),
                TextColumn::make('palate')
                    ->searchable(),
                TextColumn::make('occlusion')
                    ->searchable(),
                TextColumn::make('ency')
                    ->searchable(),
                TextColumn::make('tongue')
                    ->searchable(),
                TextColumn::make('lips')
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
