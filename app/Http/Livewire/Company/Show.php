<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    public $company;

    public function mount($slug)
    {
        $this->company = Company::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.company.show');
    }
}
