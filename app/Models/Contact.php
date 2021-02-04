<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id', 'first_name', 'last_name', 'title', 'phone_number', 'email_address'
    ];

    public function companies()
    {
        return $this->belongsTo(Company::class);
    }
}
