<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use App\Models\Contact;
use Livewire\Component;

class Single extends Component
{
    public $company;
    public $contacts;

    public function mount(Company $company)
    {
        $this->company = $company;
        $contacts = $company->contacts();
    }

    public function render()
    {
        return view('livewire.company.single');
    }
}
