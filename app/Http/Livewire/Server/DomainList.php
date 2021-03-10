<?php

namespace App\Http\Livewire\Server;

use Livewire\Component;
use App\Models\Server;

class DomainList extends Component
{
    public $server;

    public $showCreateModal = false;
    public $saved = false;
    public $name;
    public $url;
    public $registrar;
    public $expires;
    public $managed_by;

    public function showModal()
    {
        $this->showCreateModal = true;
    }

    public function closeModal()
    {
        $this->showCreateModal = false;

        $this->resetInputs();
    }

    public function resetInputs()
    {
        $this->company_id = '';
        $this->name = '';
        $this->ip_address = '';
    }

    public function mount(Server $server)
    {
        $this->server = $server;
    }

    public function render()
    {
        return view('livewire.server.domain-list');
    }
}
