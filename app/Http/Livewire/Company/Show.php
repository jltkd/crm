<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public $search = '';
    public $showCreateModal = false;
    public $company_name;
    public $status = '';
    public $address;
    public $city;
    public $state;
    public $postal_code;
    public $phone_number;
    public $email_address;
    public $logo;
    public $saved = false;

    public function showModal()
    {
        $this->showCreateModal = true;
    }

    public function rules()
    {
        return [
          'company_name' => 'required|min:3',
          'status' => 'required|in:'.collect(Company::STATUSES)->keys()->implode(','),
        ];
    }

    public function resetInputs()
    {
        $this->company_name = '';
        $this->status = '';
        $this->address = '';
        $this->city = '';
        $this->state = '';
        $this->postal_code = '';
        $this->phone_number = '';
        $this->email_address = '';
    }

    public function create()
    {
        Company::create([
            'company_name'  => $this->company_name,
            'status'        => $this->status,
            'address'       => $this->address,
            'city'          => $this->city,
            'state'         => $this->state,
            'postal_code'   => $this->postal_code,
            'phone_number'  => $this->phone_number,
            'email_address' => $this->email_address,
        ]);

        $this->showCreateModal = false;
        $this->saved = true;
        $this->dispatchBrowserEvent('notify', 'Company Saved!');
        $this->resetInputs();
    }

    public function save()
    {

    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.company.show', [
            'companies' => Company::where('company_name', 'like', $search)->orderBy('company_name')->paginate(24),
        ]);
    }
}
