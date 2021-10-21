<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientForm extends Component
{

    public $name;
    public $status;
    public $address;
    public $city;
    public $state;
    public $zip_code;
    public $phone_number;

    protected $rules = [
        'name'         => 'required',
        'status'       => 'required',
        'address'      => 'nullable',
        'city'         => 'nullable',
        'state'        => 'nullable',
        'zip_code'     => 'nullable',
        'phone_number' => 'nullable'
    ];

    public function createClient()
    {
        $validateData = $this->validate();

        Client::create($validateData);
    }

    public function render()
    {
        return view('livewire.client-form');
    }
}
