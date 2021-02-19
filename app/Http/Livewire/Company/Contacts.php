<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use App\Models\Contact;
use Livewire\Component;

class Contacts extends Component
{
    public $company;
    public $showCreateModal = false;
    public $company_id;
    public $first_name;
    public $last_name;
    public $title;
    public $phone_number;
    public $email_address;
    public $saved = false;

    public function showModal()
    {
        $this->showCreateModal = true;
    }

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required'
    ];

    public function resetInputs()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->title = '';
        $this->phone_number = '';
        $this->email_address = '';
    }

    public function closeModal()
    {
        $this->showCreateModal = false;
        $this->resetInputs();
    }

    public function create()
    {
        $this->validate();

        Contact::create([
            'company_id' => $this->company->id,
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'title'      => $this->title,
            'phone_number' => $this->phone_number,
            'email_address' => $this->email_address,
        ]);

        $this->showCreateModal = false;
        $this->saved = true;
        $this->company = Company::find($this->company->id);
        $this->dispatchBrowserEvent('notify', 'Contact Saved!');
        $this->resetInputs();
    }

    public function render()
    {
        return view('livewire.company.contacts');
    }
}
