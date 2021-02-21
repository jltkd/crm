<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use App\Models\Domain;
use Livewire\Component;

class DomainList extends Component
{
    public $company;
    public $showCreateModal = false;
    public $saved = false;

    public $server_id;
    public $name;
    public $url;
    public $registrar;
    public $expires;
    public $managed_by;

    protected $rules = [
        'name' => 'required',
        'url'  => 'required',
    ];

    public function resetInputs()
    {
        $this->name = '';
        $this->url = '';
        $this->registrar = '';
        $this->expires = '';
        $this->managed_by = '';
    }

    public function showModal()
    {
        $this->showCreateModal = true;
    }

    public function closeModal()
    {
        $this->showCreateModal = false;
    }

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function create()
    {
        $this->validate();

        Domain::create([
            'company_id' => $this->company->id,
            'server_id'  => $this->server_id,
            'name'       => $this->name,
            'url'        => $this->url,
            'registrar'  => $this->registrar,
            'expires'    => $this->expires,
            'manages_by' => $this->managed_by,
        ]);

        $this->showCreateModal = false;
        $this->saved = true;
        $this->company = Company::find($this->company->id);
        $this->dispatchBrowserEvent('notify', 'Domain Saved!');
        $this->resetInputs();
    }

    public function render()
    {
        return view('livewire.company.domain-list');
    }
}
