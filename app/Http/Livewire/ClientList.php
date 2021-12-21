<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientList extends Component
{
    public $client;

    public function mount(Client $client)
    {
        $this->client = $client;
    }

    public function render()
    {
        return view('livewire.client-list', [
            'clients' => Client::orderBy('name', 'ASC')->get()
        ]);
    }
}
