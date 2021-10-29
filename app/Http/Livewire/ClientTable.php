<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientTable extends Component
{
    public function render()
    {
        return view('livewire.client-table', [
            'clients' => Client::orderBy('name', 'ASC')->get()
        ]);
    }
}
