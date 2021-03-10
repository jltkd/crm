<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * Return the sluggable configuration for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'company_name'
            ]
        ];
    }

    const STATUSES = [
        'active'     => 'Active',
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

    public function servers()
    {
        return $this->hasMany(Server::class);
    }

    public function domains()
    {
        return $this->hasMany(Domain::class);
    }
}
