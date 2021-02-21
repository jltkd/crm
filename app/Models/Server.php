<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'slug',
        'ip_address',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function domains()
    {
        return $this->hasMany(Domain::class);
    }
}
