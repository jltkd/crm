<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use App\Models\Contact;
use Livewire\Component;

class Single extends Component
{
    public $company;

    public function mount($slug)
    {
        $this->company = Company::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.company.single');
    }
}
