<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use App\Models\Color;
use App\Models\Size;
use App\Models\VariantOption;
use Facades\App\Helpers\SKU;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VariantsRelationManager extends RelationManager
{
    protected static string $relationship = 'variants';

    protected static ?string $recordTitleAttribute = 'sku';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\TextInput::make('sku')
                        ->required()
                        ->default(
                            fn (RelationManager $livewire) =>
                            SKU::make($livewire->ownerRecord->title)
                        )
                        ->maxLength(255),
                    Forms\Components\TextInput::make('sale_price')->numeric()->required(),
                    Forms\Components\TextInput::make('offer_price')->numeric()->required(),
                    Forms\Components\TextInput::make('shipping_weight')->required(false),
                    Forms\Components\TextInput::make('stock')->numeric()->required(),
                    Forms\Components\TextInput::make('dimension'),
                    Forms\Components\Select::make('size_id')
                        ->options(Size::all()->pluck('name', 'id')),
                    Forms\Components\Select::make('color_id')
                        ->options(Color::all()->pluck('name', 'id')),
                    Forms\Components\Grid::make(3)->schema([
                        Forms\Components\Toggle::make('active')
                            ->default(true),
                        Forms\Components\Toggle::make('free_shipping')
                            ->default(false),
                        Forms\Components\Toggle::make('is_default')
                            ->default(false),
                    ]),
                ])->columns(2),

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sku'),
                Tables\Columns\TextColumn::make('sale_price'),
                Tables\Columns\TextColumn::make('offer_price'),
                Tables\Columns\TextColumn::make('stock'),
                // Tables\Columns\TextColumn::make('shipping_weight'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\IconColumn::make('free_shipping')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
