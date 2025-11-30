<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Mise à jour des documents pour les chauffeurs de taxi:
     * - Supprime les anciens champs de documents génériques
     * - Ajoute 5 nouveaux champs spécifiques au taxi
     */
    public function up(): void
    {
        Schema::table('driver_applications', function (Blueprint $table) {
            // Supprimer les anciens champs de documents
            $table->dropColumn([
                'profile_photo',
                'license_front',
                'license_back',
                'vehicle_registration_front',
                'vehicle_registration_back',
                'vehicle_photo_front',
                'vehicle_photo_side',
            ]);
        });

        Schema::table('driver_applications', function (Blueprint $table) {
            // Ajouter les 5 nouveaux champs spécifiques au taxi
            $table->string('selfie')->nullable()->after('license_plate')->comment('Photo selfie du conducteur');
            $table->string('permis_conduire')->nullable()->after('selfie')->comment('Permis de conduire (recto/verso)');
            $table->string('photo_vehicule')->nullable()->after('permis_conduire')->comment('Photo du véhicule taxi');
            $table->string('carte_grise')->nullable()->after('photo_vehicule')->comment('Certificat d\'immatriculation');
            $table->string('licence_taxi')->nullable()->after('carte_grise')->comment('Licence de taxi officielle');
        });
    }

    /**
     * Reverse the migrations.
     * Restaure les anciens champs de documents
     */
    public function down(): void
    {
        Schema::table('driver_applications', function (Blueprint $table) {
            // Supprimer les nouveaux champs taxi
            $table->dropColumn([
                'selfie',
                'permis_conduire',
                'photo_vehicule',
                'carte_grise',
                'licence_taxi',
            ]);
        });

        Schema::table('driver_applications', function (Blueprint $table) {
            // Restaurer les anciens champs
            $table->string('profile_photo')->nullable()->after('license_plate');
            $table->string('license_front')->nullable()->after('profile_photo');
            $table->string('license_back')->nullable()->after('license_front');
            $table->string('vehicle_registration_front')->nullable()->after('license_back');
            $table->string('vehicle_registration_back')->nullable()->after('vehicle_registration_front');
            $table->string('vehicle_photo_front')->nullable()->after('vehicle_registration_back');
            $table->string('vehicle_photo_side')->nullable()->after('vehicle_photo_front');
        });
    }
};
