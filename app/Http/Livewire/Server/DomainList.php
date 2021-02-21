<?php

namespace App\Http\Livewire\Server;

use Livewire\Component;
use App\Models\Server;

class DomainList extends Component
{
    public $server;

    public function mount(Server $server)
    {
        $this->server = $server;
    }

    public function render()
    {
        return view('livewire.server.domain-list');
    }
}
