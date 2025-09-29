<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Company;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->placeholder('Nome do Produto')
                    ->required(),

                TextInput::make('price')
                    ->label('Preço')
                    ->prefix('R$ ')
                    ->placeholder('Preço do Produto')
                    ->required(),

                Textarea::make('description')
                    ->label('Descrição')
                    ->placeholder('Descrição do Produto')
                    ->rows(3)
                    ->required(),

                FileUpload::make('image_url')
                    ->label('Imagem')
                    ->image()
                    ->directory('product-images')
                    ->maxSize(2048)
                    ->maxFiles(1)
                    ->required(),

                Select::make('company_id')
                    ->label('Empresa')
                    ->relationship('company', 'name')
                    ->options(Company::pluck('name', 'id')),
            ]);
    }
}
