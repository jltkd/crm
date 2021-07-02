<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use App\Models\Contact;
use Livewire\Component;

class Contacts extends Component
{
    public $company;
    public $showEditModal = false;
    public $company_id;
    public $first_name;
    public $last_name;
    public $title;
    public $phone_number;
    public $email_address;
    public $saved = false;
    public Contact $editing;

    protected $listeners = ['contactAdded'];

    public function contactAdded()
    {
        $this->editing->refresh();
    }

    public function showModal()
    {
        $this-$showEditModal = true;
    }

    public function mount(Company $company)
    {
        $this->company = $company;
        $this->editing = $this->makeBlankContact();
    }

    protected $rules = [
        'editing.company_id' => 'required',
        'editing.first_name' => 'required',
        'editing.last_name' => 'required',
        'editing.title' => 'nullable',
        'editing.phone_number' => 'nullable',
        'editing.email_address' => 'nullable'
    ];

    public function closeModal()
    {
        $this->showEditModal = false;
    }

    public function makeBlankContact()
    {
        return Contact::make();
    }

    public function create()
    {
        if ($this->editing->getKey()) $this->editing = $this->makeBlankContact();
        $this->showEditModal = true;
    }

    public function edit(Contact $contact)
    {
        if ($this->editing->isNot($contact)) $this->editing = $contact;
        $this->showEditModal = true;
    }

    public function save()
    {
        $this->validate();
        $this->editing->save();
        $this->showEditModal = false;
        $this->emit('contactAdded');
    }

    public function delete($id)
    {
        Contact::find($id)->delete();
        $this->dispatchBrowserEvent('warning', 'Contact Deleted!');
    }

    public function render()
    {
        return view('livewire.company.contacts');
    }
}
