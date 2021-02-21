<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'server_id',
        'name',
        'url',
        'registrar',
        'expires',
        'managed_by'
    ];

    const MANAGED = [
        'us' => 'Us',
        'client' => 'Client',
        'other' => 'Other'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function server()
    {
        return $this->belongsTo(Server::class);
    }

}
