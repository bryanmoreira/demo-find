<?php

namespace App\Filament\Resources\Companies\Tables;

use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Ysfkaya\FilamentPhoneInput\Tables\PhoneColumn;

class CompaniesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nome'),

                TextColumn::make('cnpj')
                    ->label('CNPJ'),

                TextColumn::make('address')
                    ->label('Endereço'),

                TextColumn::make('email')
                    ->label('E-mail'),

                TextColumn::make('website')
                    ->label('Website'),

                PhoneColumn::make('telephone')
                    ->label('Telefone'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    FilamentExportBulkAction::make('export')->label('Exportar')->icon('heroicon-o-document-text'),
                ]),
            ]);
    }
}
