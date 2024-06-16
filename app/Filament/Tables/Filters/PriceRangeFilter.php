<?php

namespace App\Filament\Tables\Filters;

use Filament\Tables\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\TextInput;

class PriceRangeFilter extends BaseFilter
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->form([
            TextInput::make('from')
                ->numeric()
                ->placeholder('Min price')
                ->label('From'),
            TextInput::make('to')
                ->numeric()
                ->placeholder('Max price')
                ->label('To'),
        ]);
    }

    public function apply(Builder $query, array $data = []): Builder
    {
        return $query
            ->when($data['from'] ?? null, fn ($query, $from) => $query->where('price', '>=', $from))
            ->when($data['to'] ?? null, fn ($query, $to) => $query->where('price', '<=', $to));
    }

    public function indicators(): array
    {
        return [
            'from' => fn ($data) => $data['from'] ? 'Min: ' . $data['from'] : null,
            'to' => fn ($data) => $data['to'] ? 'Max: ' . $data['to'] : null,
        ];
    }

    public static function getDefaultName(): ?string
    {
        return 'price_range';
    }
}
