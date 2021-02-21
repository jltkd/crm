<?php

namespace App\Http\Livewire\Server;

use App\Models\Server;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAllServers extends Component
{
    use WithPagination;

    public $search = '';
    public $showCreateModal = false;
    public $saved = false;
    public $company_id;
    public $name;
    public $slug;
    public $ip_address;

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

    protected $rules = [
      'name' => 'required',
      'ip_address' => 'required',
    ];

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.server.show-all-servers', [
            'servers' => Server::where('name', 'like', $search)->orderBy('name')->paginate(9)
        ]);
    }
}
