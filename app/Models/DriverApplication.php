<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverApplication extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'email',
        'password',
        'phone',
        'rib',
        'city',
        'region',
        'delegation',
        'service_type',
        'vehicle_type',
        'license_number',
        'has_vehicle',
        'has_license',
        'vehicle_brand',
        'vehicle_model',
        'vehicle_year',
        'license_plate',
        // Documents spécifiques au taxi
        'selfie',
        'permis_conduire',
        'photo_vehicule',
        'carte_grise',
        'licence_taxi',
        'message',
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
            'has_vehicle' => 'boolean',
            'has_license' => 'boolean',
            'approved_at' => 'datetime',
            'last_login_at' => 'datetime',
        ];
    }
}
