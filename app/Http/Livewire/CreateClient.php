<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateClient extends Component
{
    public $name;
    public $slug;
    public $status;
    public $address;
    public $city;
    public $state;
    public $zip_code;
    public $phone_number;

    protected $rules = [
        'name' => 'required',
        'slug' => 'required',
        'status' => 'required',
        'address' => 'nullable',
        'city' => 'nullable',
        'state' => 'nullable',
        'zip_code' => 'nullable',
        'phone_number' => 'nullable'
    ];

    public function createClient()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.create-client');
    }
}
