<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\Company;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->required(),

                TextInput::make('email')
                    ->label('E-mail')
                    ->email()
                    ->required(),

                TextInput::make('password')
                    ->label('Senha')
                    ->password()
                    ->required()
                    ->visibleOn('create'),

                Select::make('companies')
                    ->multiple()
                    ->label('Empresas')
                    ->relationship('companies', 'name')
                    ->options(Company::pluck('name', 'id')),
            ]);
    }
}
