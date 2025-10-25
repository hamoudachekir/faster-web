<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('driver_applications', function (Blueprint $table) {
            // Personal Information
            $table->enum('gender', ['male', 'female'])->nullable()->after('last_name');
            $table->date('date_of_birth')->nullable()->after('gender');
            $table->string('rib')->nullable()->after('phone');
            
            // Location Details
            $table->string('region')->nullable()->after('city');
            $table->string('delegation')->nullable()->after('region');
            
            // Vehicle Information
            $table->string('vehicle_brand')->nullable()->after('has_vehicle');
            $table->string('vehicle_model')->nullable()->after('vehicle_brand');
            $table->year('vehicle_year')->nullable()->after('vehicle_model');
            $table->string('license_plate')->nullable()->after('vehicle_year');
            
            // Documents (file paths)
            $table->string('profile_photo')->nullable()->after('license_plate');
            $table->string('license_front')->nullable()->after('profile_photo');
            $table->string('license_back')->nullable()->after('license_front');
            $table->string('vehicle_registration_front')->nullable()->after('license_back');
            $table->string('vehicle_registration_back')->nullable()->after('vehicle_registration_front');
            $table->string('vehicle_photo_front')->nullable()->after('vehicle_registration_back');
            $table->string('vehicle_photo_side')->nullable()->after('vehicle_photo_front');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('driver_applications', function (Blueprint $table) {
            $table->dropColumn([
                'gender',
                'date_of_birth',
                'rib',
                'region',
                'delegation',
                'vehicle_brand',
                'vehicle_model',
                'vehicle_year',
                'license_plate',
                'profile_photo',
                'license_front',
                'license_back',
                'vehicle_registration_front',
                'vehicle_registration_back',
                'vehicle_photo_front',
                'vehicle_photo_side',
            ]);
        });
    }
};
