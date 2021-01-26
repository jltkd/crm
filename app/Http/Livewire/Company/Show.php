<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.company.show', [
            'companies' => Company::where('company_name', 'like', $search)->paginate(24),
        ]);
    }
}
