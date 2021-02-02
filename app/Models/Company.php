<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    const STATUSES = [
        'live'     => 'Live',
        'prospect' => 'Prospect',
        'closed'   => 'Closed',
    ];

    protected $guarded = [];

    protected $fillable = [
        'company_name', 'status', 'address', 'city', 'state', 'postal_code', 'phone_number', 'email_address', 'logo'
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
