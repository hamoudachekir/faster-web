<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerApplication extends Model
{
    protected $fillable = [
        'business_name',
        'business_type',
        'registration_number',
        'address',
        'website',
        'contact_name',
        'contact_position',
        'email',
        'password',
        'phone',
        'monthly_rides',
        'schedule',
        'schedule_other',
        'city',
        'partner_type',
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
            'schedule' => 'array',
            'approved_at' => 'datetime',
            'last_login_at' => 'datetime',
        ];
    }
}
