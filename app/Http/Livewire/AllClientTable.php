<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Client;
use Rappasoft\LaravelLivewireTables\Views\Filter;

class AllClientTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('Name')
                ->searchable()
                ->sortable(),
            Column::make('Phone Number'),
            Column::make('Status')
                ->sortable(),
        ];
    }

    public function filters(): array
    {
        return [
          'status' => Filter::make('Status')
            ->select([
                '' => 'Any',
                'Active' => 'Active',
                'Inactive' => 'Inactive',
                'Prospect' => 'Prospect'
            ]),
        ];
    }

    public function query(): Builder
    {
        return Client::query()
            ->when($this->getFilter('status'), fn ($query, $status) => $query->where('status', $status));
    }

    public function getTableRowUrl($row): string
    {
        return route('client.show', $row);
    }
}
