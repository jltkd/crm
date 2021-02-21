<?php

namespace App\Http\Livewire\Server;

use App\Models\Server;
use App\Models\Company;
use Livewire\Component;

class Single extends Component
{
    public $server;

    public function mount($slug)
    {
        $this->server = Server::with('company')->where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.server.single');
    }
}
