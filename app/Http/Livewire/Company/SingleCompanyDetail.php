<?php

namespace App\Http\Livewire\Company;

use Livewire\Component;
use App\Models\Company;

class SingleCompanyDetail extends Component
{
    public Company $company;
    public Company $editing;
    public $showEditModal = false;

    public function rules()
    {
        return [
            'editing.company_name' => 'required',
            'editing.address' => 'nullable',
            'editing.city' => 'nullable',
            'editing.state' => 'nullable',
            'editing.postal_code' => 'nullable',
            'editing.phone_number' => 'nullable',
        ];
    }

    public function edit(Company $company)
    {
        $this->editing = $company;
        $this->showEditModal = true;
    }

    public function save()
    {
        $this->validate();
        $this->editing->save();
        $this->showEditModal = false;
    }

    public function showModal()
    {
        $this->showEditModal = true;
    }

    public function closeModal()
    {
        $this->showEditModal = false;
    }

    public function render()
    {
        return view('livewire.company.single-company-detail');
    }
}
