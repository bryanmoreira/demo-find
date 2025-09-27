<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Support\RawJs;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;
use Ysfkaya\FilamentPhoneInput\PhoneInputNumberType;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->placeholder('Nome da Empresa')
                    ->required(),

                TextInput::make('cnpj')
                    ->label('CNPJ')
                    ->mask('99.999.999/9999-99')
                    ->placeholder('99.999.999/9999-99')
                    ->required(),

                TextInput::make('address')
                    ->label('Endereço')
                    ->placeholder('Rua Exemplo, 123, Bairro, Cidade, Estado, CEP'),


                TextInput::make('email')
                    ->label('E-mail')
                    ->placeholder('exemplo@email.com')
                    ->email(),

                TextInput::make('website')
                    ->label('Website')
                    ->placeholder('https://www.example.com')
                    ->url(),

                PhoneInput::make('telephone')
                    ->label('Telefone')
                    ->defaultCountry('BR')
                    ->placeholder('99 99999-9999')
                    ->inputNumberFormat(PhoneInputNumberType::NATIONAL)
                    ->required(),
            ]);
    }
}
