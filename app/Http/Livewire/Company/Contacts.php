<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;

class Contacts extends Component
{
    public Company $company;

    public function render()
    {
        return view('livewire.company.contacts');
    }
}
