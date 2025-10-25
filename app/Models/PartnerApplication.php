<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerApplication extends Model
{
    protected $fillable = [
        'business_name',
        'contact_name',
        'email',
        'password',
        'phone',
        'city',
        'partner_type',
        'business_type',
        'address',
        'description',
        'status',
        'admin_notes',
        'approved_at',
        'last_login_at',
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'approved_at' => 'datetime',
            'last_login_at' => 'datetime',
        ];
    }
}
