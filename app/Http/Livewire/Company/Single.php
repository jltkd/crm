<?php

namespace App\Http\Livewire\Company;

use Livewire\Component;

class Single extends Component
{
    public $company;

    public function mount($company)
    {
        $this->title = $company->company_name;
    }

    public function render()
    {
        return view('livewire.company.single');
    }
}
