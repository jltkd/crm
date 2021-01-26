<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;

class Single extends Component
{
    public $company;

    // TODO: Need to display single company

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.company.single');
    }
}
